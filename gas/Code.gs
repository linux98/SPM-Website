/**
 * =========================================================================================
 * 🏛️ สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร / SESAO Sakon Nakhon)
 * 🚀 Google Apps Script (GAS) Backend & Telegram Bot Dispatcher
 * =========================================================================================
 * 
 * 📌 หน้าที่ของสคริปต์นี้:
 * 1. รับข้อมูลจากเว็บไซต์ผ่าน HTTP POST (doPost) สำหรับ:
 *    - ระบบยื่นคำร้องอิเล็กทรอนิกส์ (Smart e-Service Petitions) เช่น ขอหนังสือรับรอง, ขอ ก.พ.7
 *    - ศูนย์รับเรื่องร้องเรียนทุจริตและร้องทุกข์ (Whistleblower & Corruption Complaints)
 * 2. บันทึกข้อมูลลง Google Sheets โดยอัตโนมัติ พร้อมสร้าง Tracking ID
 * 3. ส่งการแจ้งเตือนไปยังกลุ่ม / แชนแนล Telegram ของ สพม.สกลนคร ทันที
 * 4. ให้บริการ API (doGet) สำหรับตรวจสอบสถานะคำร้องด้วย Tracking ID
 *
 * ⚙️ ขั้นตอนการตั้งค่า:
 * 1. นำโค้ดนี้ไปวางใน Google Apps Script (script.google.com)
 * 2. กำหนดค่า TELEGRAM_BOT_TOKEN และ TELEGRAM_CHAT_ID ด้านล่าง
 * 3. Deploy เป็น Web App:
 *    - Execute as: "Me"
 *    - Who has access: "Anyone"
 * 4. นำ Web App URL ที่ได้ไปแทนที่ในไฟล์ index.html
 */

// =========================================================================================
// 1. CONFIGURATION (การตั้งค่าระบบ)
// =========================================================================================
const CONFIG = {
  // ใส่ Telegram Bot Token ที่ได้จาก @BotFather
  TELEGRAM_BOT_TOKEN: "YOUR_TELEGRAM_BOT_TOKEN_HERE",

  // ใส่ Chat ID ของกลุ่ม หรือ Channel ที่ต้องการรับแจ้งเตือน (สามารถเป็นเลขติดลบสำหรับ Supergroup เช่น -100xxxxxxxxxx)
  TELEGRAM_CHAT_ID: "YOUR_TELEGRAM_CHAT_ID_HERE",

  // ชื่อแผ่นงานใน Google Sheets
  SHEET_REQUESTS: "คำร้องออนไลน์",
  SHEET_COMPLAINTS: "เรื่องร้องเรียน_ทุจริต",
  SHEET_LOGS: "System_Logs"
};

// =========================================================================================
// 2. HTTP POST HANDLER (รับข้อมูลจากหน้าเว็บ)
// =========================================================================================
function doPost(e) {
  const lock = LockService.getScriptLock();
  lock.tryLock(10000); // ป้องกัน race condition เมื่อมีการส่งข้อมูลพร้อมกัน

  try {
    let data;
    if (e.postData && e.postData.contents) {
      data = JSON.parse(e.postData.contents);
    } else {
      data = e.parameter;
    }

    const action = data.action || "new_request";
    const timestamp = new Date();
    const formattedDate = Utilities.formatDate(timestamp, "Asia/Bangkok", "dd/MM/yyyy HH:mm:ss");

    let result = {};

    if (action === "new_request") {
      // -------------------------------------------------------------
      // กรณี: ยื่นคำร้องอิเล็กทรอนิกส์ (Smart Request)
      // -------------------------------------------------------------
      const trackingId = data.tracking_id || ("SKN-REQ-" + Utilities.formatDate(timestamp, "Asia/Bangkok", "yyyyMMdd") + "-" + Math.floor(1000 + Math.random() * 9000));
      
      const sheet = getOrCreateSheet(CONFIG.SHEET_REQUESTS, [
        "วันเวลาที่ยื่น", "Tracking ID", "ประเภทคำร้อง", "ชื่อ-นามสกุล", 
        "เบอร์โทรศัพท์", "ตำแหน่ง/สังกัด", "Telegram User", "รายละเอียดคำร้อง", "สถานะดำเนินการ", "วันเวลาที่ดำเนินการเสร็จสิ้น"
      ]);

      sheet.appendRow([
        formattedDate,
        trackingId,
        data.category || "-",
        data.citizen_name || "-",
        data.phone || "-",
        data.position_school || "-",
        data.telegram_username || "-",
        data.detail || "-",
        "รอดำเนินการ",
        "-"
      ]);

      // ส่งข้อความแจ้งเตือน Telegram
      sendTelegramRequestNotification(trackingId, data, formattedDate);

      result = {
        status: "success",
        message: "บันทึกคำร้องและแจ้งเตือนผ่าน Telegram สำเร็จ",
        tracking_id: trackingId,
        timestamp: formattedDate
      };

    } else if (action === "whistleblower_complaint") {
      // -------------------------------------------------------------
      // กรณี: ศูนย์รับเรื่องร้องเรียนทุจริตและร้องทุกข์ (Whistleblower)
      // -------------------------------------------------------------
      const trackingId = data.tracking_id || ("SKN-WHISTLE-" + Utilities.formatDate(timestamp, "Asia/Bangkok", "yyyyMMdd") + "-" + Math.floor(1000 + Math.random() * 9000));
      
      const sheet = getOrCreateSheet(CONFIG.SHEET_COMPLAINTS, [
        "วันเวลาที่แจ้ง", "Tracking ID", "ประเภทเรื่อง", "ผู้ร้องเรียน (PDPA)", 
        "เบอร์โทรศัพท์", "รายละเอียดข้อร้องเรียน", "สถานะการตรวจสอบ", "ผลการพิจารณา"
      ]);

      sheet.appendRow([
        formattedDate,
        trackingId,
        data.topic || "-",
        data.complainant || "ไม่ประสงค์ออกนาม",
        data.phone || "-",
        data.detail || "-",
        "รับเรื่อง/อยู่ระหว่างตรวจสอบข้อเท็จจริง",
        "-"
      ]);

      // ส่งข้อความแจ้งเตือน Telegram สายตรง (ลับ/ความมั่นคง)
      sendTelegramWhistleNotification(trackingId, data, formattedDate);

      result = {
        status: "success",
        message: "ส่งข้อร้องเรียนสู่ศูนย์รับเรื่องและแจ้งเตือน Telegram สำเร็จ",
        tracking_id: trackingId,
        timestamp: formattedDate
      };
    }

    return ContentService.createTextOutput(JSON.stringify(result))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (err) {
    logSystemError("doPost", err.toString());
    return ContentService.createTextOutput(JSON.stringify({
      status: "error",
      message: err.toString()
    })).setMimeType(ContentService.MimeType.JSON);

  } finally {
    lock.releaseLock();
  }
}

// =========================================================================================
// 3. HTTP GET HANDLER (ตรวจสอบสถานะคำร้อง)
// =========================================================================================
function doGet(e) {
  const trackingId = e.parameter.tracking_id;

  if (!trackingId) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "ok",
      service: "สพม.สกลนคร Smart e-Service API",
      message: "ระบบพร้อมใช้งาน กรุณาระบุพารามิเตอร์ tracking_id เพื่อตรวจสอบสถานะคำร้อง"
    })).setMimeType(ContentService.MimeType.JSON);
  }

  // ค้นหาในแผ่นงานคำร้อง
  const reqStatus = searchTrackingStatus(CONFIG.SHEET_REQUESTS, trackingId);
  if (reqStatus) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "found",
      data: reqStatus
    })).setMimeType(ContentService.MimeType.JSON);
  }

  // ค้นหาในแผ่นงานเรื่องร้องเรียน
  const whistleStatus = searchTrackingStatus(CONFIG.SHEET_COMPLAINTS, trackingId);
  if (whistleStatus) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "found",
      data: whistleStatus
    })).setMimeType(ContentService.MimeType.JSON);
  }

  return ContentService.createTextOutput(JSON.stringify({
    status: "not_found",
    message: "ไม่พบข้อมูลสำหรับ Tracking ID: " + trackingId
  })).setMimeType(ContentService.MimeType.JSON);
}

// =========================================================================================
// 4. TELEGRAM BOT NOTIFICATION HELPERS
// =========================================================================================

/**
 * ส่งแจ้งเตือนคำร้องออนไลน์ทั่วไป
 */
function sendTelegramRequestNotification(trackingId, data, formattedDate) {
  const message = 
    `🔔 <b>[มีคำร้องออนไลน์ใหม่]</b> สพม.สกลนคร\n` +
    `━━━━━━━━━━━━━━━━━━━━\n` +
    `📌 <b>Tracking ID:</b> <code>${trackingId}</code>\n` +
    `📋 <b>ประเภท:</b> ${escapeHtml(data.category || "-")}\n` +
    `👤 <b>ผู้ยื่น:</b> ${escapeHtml(data.citizen_name || "-")}\n` +
    `🏫 <b>สังกัด:</b> ${escapeHtml(data.position_school || "-")}\n` +
    `📞 <b>โทรศัพท์:</b> ${escapeHtml(data.phone || "-")}\n` +
    `💬 <b>Telegram:</b> ${escapeHtml(data.telegram_username || "-")}\n` +
    `📝 <b>รายละเอียด:</b>\n<i>${escapeHtml(data.detail || "-")}</i>\n` +
    `━━━━━━━━━━━━━━━━━━━━\n` +
    `⏰ <i>${formattedDate}</i>\n` +
    `⚡ <i>ระบบบันทึกลง Google Sheets เรียบร้อยแล้ว</i>`;

  sendTelegramApi(message);
}

/**
 * ส่งแจ้งเตือนเรื่องร้องเรียนทุจริต/ร้องทุกข์ (กลุ่มกฎหมายและคดี)
 */
function sendTelegramWhistleNotification(trackingId, data, formattedDate) {
  const message = 
    `🚨 <b>[ข้อร้องเรียนทุจริต/ร้องทุกข์ใหม่] (PDPA Protected)</b>\n` +
    `━━━━━━━━━━━━━━━━━━━━\n` +
    `🛡️ <b>รหัสคดี:</b> <code>${trackingId}</code>\n` +
    `⚖️ <b>ประเภท:</b> ${escapeHtml(data.topic || "-")}\n` +
    `👤 <b>ผู้แจ้ง:</b> ${escapeHtml(data.complainant || "ไม่ประสงค์ออกนาม")}\n` +
    `📞 <b>เบอร์ติดต่อ:</b> ${escapeHtml(data.phone || "ไม่ระบุ")}\n` +
    `⚠️ <b>รายละเอียดเบาะแส:</b>\n<i>${escapeHtml(data.detail || "-")}</i>\n` +
    `━━━━━━━━━━━━━━━━━━━━\n` +
    `⏰ <i>${formattedDate}</i>\n` +
    `🔒 <i>ส่งตรงจากศูนย์รับเรื่องร้องเรียน สพม.สกลนคร</i>`;

  sendTelegramApi(message);
}

/**
 * ฟังก์ชันหลักในการเรียก Telegram Bot API
 */
function sendTelegramApi(htmlMessage) {
  if (!CONFIG.TELEGRAM_BOT_TOKEN || CONFIG.TELEGRAM_BOT_TOKEN === "YOUR_TELEGRAM_BOT_TOKEN_HERE") {
    Logger.log("Telegram Bot Token ยังไม่ได้ถูกกำหนดค่า ข้ามการส่งข้อความ");
    return;
  }

  const url = `https://api.telegram.org/bot${CONFIG.TELEGRAM_BOT_TOKEN}/sendMessage`;
  const payload = {
    chat_id: CONFIG.TELEGRAM_CHAT_ID,
    text: htmlMessage,
    parse_mode: "HTML",
    disable_web_page_preview: true
  };

  const options = {
    method: "post",
    contentType: "application/json",
    payload: JSON.stringify(payload),
    muteHttpExceptions: true
  };

  try {
    const response = UrlFetchApp.fetch(url, options);
    Logger.log("Telegram API Response: " + response.getContentText());
  } catch (err) {
    logSystemError("sendTelegramApi", err.toString());
  }
}

// =========================================================================================
// 5. GOOGLE SHEETS UTILITIES
// =========================================================================================

function getOrCreateSheet(sheetName, headers) {
  const ss = SpreadsheetApp.getActiveSpreadsheet();
  let sheet = ss.getSheetByName(sheetName);
  
  if (!sheet) {
    sheet = ss.insertSheet(sheetName);
    sheet.appendRow(headers);
    sheet.getRange(1, 1, 1, headers.length)
      .setFontWeight("bold")
      .setBackground("#0C1635")
      .setFontColor("#ECC86A");
    sheet.setFrozenRows(1);
  }
  return sheet;
}

function searchTrackingStatus(sheetName, trackingId) {
  const ss = SpreadsheetApp.getActiveSpreadsheet();
  const sheet = ss.getSheetByName(sheetName);
  if (!sheet) return null;

  const data = sheet.getDataRange().getValues();
  if (data.length <= 1) return null;

  for (let i = 1; i < data.length; i++) {
    if (data[i][1] == trackingId) {
      return {
        timestamp: data[i][0],
        tracking_id: data[i][1],
        type: data[i][2],
        requester: data[i][3],
        status: data[i][8] || data[i][6] || "อยู่ระหว่างดำเนินการ"
      };
    }
  }
  return null;
}

function logSystemError(context, errorMessage) {
  try {
    const ss = SpreadsheetApp.getActiveSpreadsheet();
    let logSheet = ss.getSheetByName(CONFIG.SHEET_LOGS);
    if (!logSheet) {
      logSheet = ss.insertSheet(CONFIG.SHEET_LOGS);
      logSheet.appendRow(["Timestamp", "Context", "Error Message"]);
    }
    logSheet.appendRow([new Date(), context, errorMessage]);
  } catch (e) {
    Logger.log("Failed to log error: " + e.toString());
  }
}

function escapeHtml(text) {
  if (!text) return "";
  return text
    .toString()
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;");
}
