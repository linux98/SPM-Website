# 🔐 ข้อมูลบัญชีผู้ใช้งานและการเข้าสู่ระบบหลังบ้าน (WordPress Credentials)
**โครงการ:** เว็บไซต์สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)  
**URL เว็บไซต์:** `https://sesaosakon.go.th/site/`

---

## 1. ข้อมูลการเข้าสู่ระบบผู้ดูแลระบบ (WordPress Admin Login)

* **ลิงก์หน้าเข้าสู่ระบบ (Login URL):**  
  👉 [https://sesaosakon.go.th/site/wp-login.php](https://sesaosakon.go.th/site/wp-login.php)  
  *(หรือ [https://sesaosakon.go.th/site/wp-admin/](https://sesaosakon.go.th/site/wp-admin/))*
* **ชื่อผู้ใช้ (Username):**  
  `Kong98Website`
* **อีเมลผู้ดูแลระบบ (Admin Email):**  
  `kongphakhapong@gmail.com`
* **สิทธิ์การใช้งาน (Role):**  
  `Administrator` (ผู้ดูแลระบบสูงสุด)

> **📌 หมายเหตุเกี่ยวกับรหัสผ่านหน้าเว็บ (Web Login Password):**  
> ตามมาตรฐานความปลอดภัยระดับสากลของ WordPress รหัสผ่านเข้าสู่ระบบหน้าเว็บจะถูกเข้ารหัสแบบทางเดียว (One-way Hash / phpass) ในฐานข้อมูล จึงไม่สามารถอ่านออกมาเป็นตัวอักษรเดิมได้  
> * หากท่านจำรหัสผ่านที่ตั้งไว้ตอนติดตั้งครั้งแรกไม่ได้ สามารถกด **"ลืมรหัสผ่านใช่หรือไม่?" (Lost your password?)** ที่หน้าล็อกอิน [https://sesaosakon.go.th/site/wp-login.php?action=lostpassword](https://sesaosakon.go.th/site/wp-login.php?action=lostpassword) แล้วกรอก `Kong98Website` หรือ `kongphakhapong@gmail.com` ระบบจะส่งลิงก์ตั้งรหัสผ่านใหม่ไปยังอีเมลของท่านทันทีครับ

---

## 2. รหัสผ่านแอปพลิเคชันสำหรับเชื่อมต่อระบบ (Application Password for REST API)

รหัสผ่านนี้ใช้สำหรับสคริปต์อัตโนมัติ (เช่น Python / Node.js) ในการเชื่อมต่อ REST API เพื่ออัปเดตหน้าเว็บหลัก (Page ID 7) และตั้งค่าระบบ:

* **Username:** `Kong98Website`
* **Application Password:**  
  `6ROD Hb59 qB0o nAlp WBYf XG1u`
* **REST API Endpoint:**  
  `https://sesaosakon.go.th/site/index.php?rest_route=/`

---

## 3. ข้อมูลฐานข้อมูลและการเชื่อมต่อเซิร์ฟเวอร์ (Server & Database Credentials)

*(ข้อมูลอ้างอิงจากไฟล์คอนฟิก `wp-config.php`)*

* **Database Name (ชื่อฐานข้อมูล):** `mattayom_site_24102569`
* **Database User (ผู้ใช้ฐานข้อมูล):** `mattayom_site`
* **Database Password (รหัสผ่านฐานข้อมูล):** `0T)TUR7POCd[tOHR`
* **Database Host:** `localhost`
* **Web Root Directory บนโฮสต์:** `/public_html/site/`
* **ที่อยู่ไฟล์ Mu-Plugins:** `/public_html/site/wp-content/mu-plugins/snippet_spm_control_center.php`
