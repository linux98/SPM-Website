<?php
/**
 * =========================================================================================
 * 🏛️ สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร / SESAO Sakon Nakhon)
 * 🚀 SPM Ultimate Control Center & GovTech Engine (WordPress Snippet / Plugin)
 * =========================================================================================
 * 
 * ระบบบริหารจัดการเนื้อหาพอร์ทัล สพม.สกลนคร แบบรวมศูนย์สำหรับ WordPress
 * ออกแบบตามพิมพ์เขียวสถาปัตยกรรมระดับ World-Class (แบบเดียวกับ SPS-Website แต่ปรับเป็นระดับ สพม.)
 * 
 * 📌 ความสามารถหลัก:
 * 1. เมนูหลังบ้าน WP-Admin: "🏛️ จัดการเนื้อหา สพม." พร้อมระบบแท็บ 10 หมวดหมู่
 * 2. ให้บริการ REST API: GET & POST /wp-json/spm/v1/settings สำหรับส่งข้อมูลไปยังหน้าเว็บ (Hydration)
 * 3. ระบบเชื่อมต่อ Telegram Bot API พร้อมฟังก์ชันทดสอบส่งข้อความแจ้งเตือนทันที
 * 4. รองรับ Import / Export พิมพ์เขียวการตั้งค่า (JSON Blueprint)
 */

if (!defined('ABSPATH')) {
    exit; // ป้องกันการเรียกตรง
}

// =========================================================================================
// 1. DEFAULT CONFIGURATION SCHEMA (ค่าเริ่มต้น 80+ คีย์ สำหรับ สพม.สกลนคร)
// =========================================================================================
function spm_get_default_settings() {
    return array(
        // Tab 1: ประกาศด่วน & Ticker หัวเว็บ (Alert & Top Ticker)
        'notice_enabled'         => '1',
        'notice_badge'           => '📢 ข่าวเด่น สพฐ.',
        'notice_text'            => 'สพม.สกลนคร ขับเคลื่อนนโยบาย "เรียนดี มีความสุข" ยกระดับห้องเรียนดิจิทัล 45 สถานศึกษา',
        'notice_link'            => '#news',
        'top_ticker_ministry'    => 'สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน (สพฐ.) กระทรวงศึกษาธิการ',
        'org_name_th'            => 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
        'org_name_en'            => 'SECONDARY EDUCATIONAL SERVICE AREA OFFICE SAKON NAKHON',
        'org_name_short'         => 'สพม.สกลนคร • SESAO Sakon Nakhon',
        'phone_hotline'          => '042-728118',
        'moe_safety_phone'       => '1579',

        // Tab 2: แบนเนอร์หลัก & ยุทธศาสตร์ (Hero Section & Taglines)
        'hero_badge'             => 'DIGITAL GOVERNANCE & EDUCATIONAL EXCELLENCE',
        'hero_title_1'           => 'ยกระดับมัธยมศึกษาสกลนคร',
        'hero_title_2'           => 'สู่มาตรฐานสากลด้วย ดิจิทัลคอนเน็กต์',
        'hero_desc'              => 'ศูนย์กลางการบริหารจัดการสถานศึกษามัธยมศึกษา 45 แห่งใน 8 สหวิทยาเขต ขับเคลื่อนด้วยระบบสารสนเทศบิ๊กดาต้า พัฒนาสมรรถนะครู คืนครูสู่ห้องเรียน และสร้างโอกาสทางการศึกษาที่ปลอดภัย ทัดเทียม และยั่งยืน',
        'hero_cta_btn1_text'     => 'ค้นหาระบบ e-Service',
        'hero_cta_btn1_link'     => '#services',
        'hero_cta_btn2_text'     => 'ข้อมูลสถิติเขต Cockpit',
        'hero_cta_btn2_link'     => '#cockpit',
        'hero_tag_1'             => 'เรียนดี มีความสุข',
        'hero_tag_2'             => '45 โรงเรียนมัธยมศึกษา',
        'hero_tag_3'             => '8 สหวิทยาเขต',
        'hero_tag_4'             => 'ITA ระดับ AA (98.50)',

        // Tab 3: คณะผู้บริหารระดับสูง สพม. (Executive Leadership)
        'director_name'          => 'นายนรงณ์ เห็นหลอด',
        'director_title'         => 'ผู้อำนวยการสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
        'director_quote'         => 'มุ่งมั่นพัฒนาผู้เรียน ปลดภาระงานครู คืนครูสู่นักเรียนอย่างแท้จริง ผ่านเทคโนโลยีดิจิทัลและธรรมาภิบาล',
        'director_image'         => '',
        'director_ext'           => 'ต่อ 101',

        'deputy_1_name'          => 'นายชลาวุธ สามาอาพัฒน์',
        'deputy_1_title'         => 'รองผู้อำนวยการ สพม.สกลนคร',
        'deputy_1_scope'         => 'กำกับดูแล: กลุ่มนิเทศ ติดตามฯ, กลุ่มส่งเสริมการศึกษา DLICT, กลุ่มส่งเสริมการจัดการศึกษา',
        'deputy_1_quote'         => 'ยกระดับผลสัมฤทธิ์ทางการเรียน ผลักดัน Active Learning ขยายห้องเรียนอัจฉริยะ 45 โรงเรียน',
        'deputy_1_image'         => '',

        'deputy_2_name'          => 'นางสาววัชราภรณ์ ปัฏนา',
        'deputy_2_title'         => 'รองผู้อำนวยการ สพม.สกลนคร',
        'deputy_2_scope'         => 'กำกับดูแล: กลุ่มบริหารงานบุคคล, กลุ่มพัฒนาครูและบุคลากรฯ, กลุ่มกฎหมายและคดี',
        'deputy_2_quote'         => 'บริหารงานบุคคลด้วยความโปร่งใส สนับสนุน ว.PA เลื่อนวิทยฐานะ และสวัสดิการขวัญกำลังใจครู',
        'deputy_2_image'         => '',

        'deputy_3_name'          => 'ดร.บุญธรรม อ้วนกันยา',
        'deputy_3_title'         => 'รองผู้อำนวยการ สพม.สกลนคร',
        'deputy_3_scope'         => 'กำกับดูแล: กลุ่มอำนวยการ, กลุ่มนโยบายและแผน, กลุ่มการเงินและสินทรัพย์, หน่วยตรวจสอบภายใน',
        'deputy_3_quote'         => 'จัดสรรงบประมาณคุ้มค่า พัฒนาโครงสร้างพื้นฐานสถานศึกษาปลอดภัย และตรวจสอบความโปร่งใส ITA',
        'deputy_3_image'         => '',

        // Tab 4: สถิติดิจิทัล Live Analytics Cockpit
        'stat_schools_count'     => '45',
        'stat_teachers_count'    => '2,468',
        'stat_students_count'    => '38,429',
        'stat_ita_score'         => '98.50',
        'stat_ita_grade'         => 'ระดับ AA (ยอดเยี่ยม)',
        'stat_student_teacher_ratio' => '15.5 : 1',
        'stat_digital_class_pct' => '100%',
        'stat_pa_passed_pct'     => '99.2%',
        'stat_eservice_satisfaction' => '98.4%',
        'stat_budget_total'      => '142.5 ล้านบาท',
        'data_sync_label'        => 'ฐานข้อมูล DMC ภาคเรียนที่ 1/2569 (สพฐ.)',

        // Tab 5: โครงสร้าง 9 กลุ่ม 1 หน่วย (เบอร์ต่อภายใน)
        'ext_group_1_admin'      => 'ต่อ 101, 102', // กลุ่มอำนวยการ
        'ext_group_2_personnel'  => 'ต่อ 116, 117', // กลุ่มบุคคล
        'ext_group_3_plan'       => 'ต่อ 105',      // กลุ่มแผน
        'ext_group_4_finance'    => 'ต่อ 111, 112', // กลุ่มการเงิน
        'ext_group_5_supervision'=> 'ต่อ 103, 108', // กลุ่มนิเทศ
        'ext_group_6_promote'    => 'ต่อ 109, 110', // กลุ่มส่งเสริม
        'ext_group_7_dlict'      => 'ต่อ 105, 107', // กลุ่ม DLICT
        'ext_group_8_dev'        => 'ต่อ 116',      // กลุ่มพัฒนาครู
        'ext_group_9_legal'      => 'ต่อ 104',      // กลุ่มกฎหมาย
        'ext_unit_10_audit'      => 'ต่อ 106',      // หน่วยตรวจภายใน

        // Tab 6: การเชื่อมต่อ Telegram Bot & Google Apps Script
        'gas_webapp_url'         => '', // URL เว็บแอป Google Apps Script
        'telegram_bot_token'     => '', // Telegram Bot Token จาก @BotFather
        'telegram_chat_id'       => '', // Chat ID กลุ่มรับแจ้งเตือน
        'telegram_whistle_chat_id'=> '',// Chat ID เฉพาะกลุ่มรับเรื่องร้องเรียนทุจริต (ลับ)
        'enable_telegram_dispatch'=> '1',

        // Tab 7: หมวดหมู่ข่าวสาร WordPress REST API (Category Mapping)
        'wp_cat_news'            => '1', // ID หมวดหมู่ข่าวประชาสัมพันธ์
        'wp_cat_egp'             => '2', // ID หมวดหมู่จัดซื้อจัดจ้าง e-GP
        'wp_cat_personnel'       => '3', // ID หมวดหมู่งานบุคคล/สอบครูผู้ช่วย
        'wp_cat_activities'      => '4', // ID หมวดหมู่ภาพข่าวกิจกรรม
        'posts_per_page'         => '6',

        // Tab 8: ลิงก์ระบบบริการภายนอกที่สำคัญ (e-Services URLs)
        'url_dpa'                => 'https://dpa-obec.com',
        'url_dmc'                => 'https://dmc.bopp-obec.info',
        'url_efiling'            => '#',
        'url_egp'                => 'http://www.gprocurement.go.th',
        'url_moe_safety'         => 'https://www.moesafetycenter.com',

        // Tab 9: ข้อมูลติดต่อ โซเชียล และสำนักงาน
        'office_address'         => 'ถนนไอทียู ตำบลธาตุเชิงชุม อำเภอเมืองสกลนคร จังหวัดสกลนคร 47000',
        'office_phone'           => '042-728118',
        'office_fax'             => '042-728119',
        'office_email'           => 'contact@sesao-skn.go.th',
        'office_hours'           => 'จันทร์ - ศุกร์: 08:30 - 16:30 น. (เว้นวันหยุดราชการ)',
        'facebook_url'           => 'https://www.facebook.com/sps.ict',
        'youtube_url'            => 'https://www.youtube.com',
        'gps_latitude'           => '17.1585',
        'gps_longitude'          => '104.1485',

        // Tab 10: ธีมสีทางการ (Royal Indigo & Champagne Gold)
        'color_indigo_primary'   => '#060B19',
        'color_indigo_surface'   => '#0C1635',
        'color_gold_primary'     => '#D4AF37',
        'color_gold_light'       => '#ECC86A',
        'color_canvas_light'     => '#F8FAFC',

        // Tab 11: การเชื่อมโยง DocumantStudio e-Service Hub (Best Practice GovTech)
        'documantstudio_webapp_url' => 'https://script.google.com/macros/s/AKfycbzQJTG5qq-ZH4OJ6XpcMA8_e2cBQmAJjUjRmIvDvywAN0CsGRjIaV0Ibxgj_4bIhWmv/exec',
        'documantstudio_embed_mode' => 'modal', // 'modal' หรือ 'new_tab'
        'documantstudio_proxy_enabled' => '1'
    );
}

function spm_get_settings() {
    $defaults = spm_get_default_settings();
    $saved = get_option('spm_portal_settings', array());
    return wp_parse_args($saved, $defaults);
}

// =========================================================================================
// 2. WP-ADMIN MENU & STYLING (Google Sans & K2D Typography)
// =========================================================================================
add_action('admin_menu', function() {
    add_menu_page(
        'จัดการเนื้อหา สพม.สกลนคร',
        '🏛️ จัดการเนื้อหา สพม.',
        'manage_options',
        'spm-portal-settings',
        'spm_render_admin_settings_page',
        'dashicons-building',
        2
    );
});

// Enqueue Google Fonts & Custom CSS in Admin
add_action('admin_head', function() {
    if (isset($_GET['page']) && $_GET['page'] === 'spm-portal-settings') {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
        echo '<link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=K2D:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">' . "\n";
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">' . "\n";
        ?>
        <style>
            .spm-admin-wrap, .spm-admin-wrap * { font-family: 'Google Sans', 'K2D', sans-serif !important; box-sizing: border-box; }
            .spm-admin-wrap { max-width: 1200px; margin: 20px 20px 40px 0; }
            .spm-admin-header {
                background: linear-gradient(135deg, #060B19 0%, #0C1635 100%);
                color: #FFF; padding: 24px 30px; border-radius: 16px;
                border: 1px solid rgba(212, 175, 55, 0.4);
                display: flex; justify-content: space-between; align-items: center;
                box-shadow: 0 10px 30px rgba(0,0,0,0.15); margin-bottom: 24px;
            }
            .spm-header-title { font-size: 22px; font-weight: 800; color: #FFF; margin: 0; }
            .spm-header-sub { font-size: 13px; color: #ECC86A; margin-top: 4px; font-weight: 500; }
            
            /* Tabs Layout */
            .spm-tabs-nav {
                display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px;
                background: #FFF; padding: 10px; border-radius: 12px; border: 1px solid #E2E8F0;
            }
            .spm-tab-btn {
                background: transparent; border: none; padding: 10px 18px; border-radius: 8px;
                font-size: 13px; font-weight: 700; color: #64748B; cursor: pointer; transition: 0.2s;
                display: inline-flex; align-items: center; gap: 8px;
            }
            .spm-tab-btn:hover { background: #F1F5F9; color: #060B19; }
            .spm-tab-btn.active {
                background: #060B19; color: #ECC86A;
                box-shadow: 0 4px 12px rgba(6, 11, 25, 0.15);
            }

            .spm-tab-content {
                display: none; background: #FFF; border-radius: 16px; border: 1px solid #E2E8F0;
                padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.04);
            }
            .spm-tab-content.active { display: block; animation: fadeIn 0.25s ease-out; }
            @keyframes fadeIn { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: translateY(0); } }

            .spm-form-group { margin-bottom: 20px; }
            .spm-label { display: block; font-size: 13px; font-weight: 700; color: #1E293B; margin-bottom: 6px; }
            .spm-desc { font-size: 11.5px; color: #64748B; margin-top: 4px; }
            .spm-input, .spm-textarea, .spm-select {
                width: 100%; max-width: 720px; padding: 10px 14px; border-radius: 8px;
                border: 1px solid #CBD5E1; font-size: 13.5px; color: #0F172A; outline: none; transition: 0.2s;
            }
            .spm-input:focus, .spm-textarea:focus { border-color: #D4AF37; box-shadow: 0 0 0 3px rgba(212,175,55,0.2); }
            .spm-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 720px; }

            .spm-save-bar {
                position: sticky; bottom: 20px; z-index: 100;
                background: rgba(6, 11, 25, 0.95); backdrop-filter: blur(10px);
                padding: 16px 24px; border-radius: 14px; border: 1px solid rgba(212, 175, 55, 0.4);
                display: flex; justify-content: space-between; align-items: center; margin-top: 24px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }
            .spm-btn-save {
                background: linear-gradient(135deg, #ECC86A 0%, #D4AF37 100%);
                color: #060B19; font-weight: 800; border: none; padding: 12px 28px;
                border-radius: 8px; font-size: 14px; cursor: pointer; transition: 0.2s;
                display: inline-flex; align-items: center; gap: 8px;
            }
            .spm-btn-save:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(212,175,55,0.4); }
        </style>
        <?php
    }
});

// =========================================================================================
// 3. REST API ENDPOINTS: GET & POST /wp-json/spm/v1/settings
// =========================================================================================
add_action('rest_api_init', function() {
    // 1. GET Settings (Public API for Website Hydration)
    register_rest_route('spm/v1', '/settings', array(
        'methods'  => 'GET',
        'callback' => function() {
            return new WP_REST_Response(spm_get_settings(), 200);
        },
        'permission_callback' => '__return_true'
    ));

    // 2. POST Settings (Update Configuration)
    register_rest_route('spm/v1', '/settings', array(
        'methods'  => 'POST',
        'callback' => function($request) {
            $params = $request->get_json_params();
            if (empty($params)) {
                $params = $request->get_params();
            }
            $current = spm_get_settings();
            $allowed_keys = array_keys(spm_get_default_settings());

            foreach ($allowed_keys as $key) {
                if (isset($params[$key])) {
                    $current[$key] = sanitize_text_field(wp_unslash($params[$key]));
                }
            }
            update_option('spm_portal_settings', $current);
            return new WP_REST_Response(array(
                'status'  => 'success',
                'message' => 'บันทึกการตั้งค่า สพม.สกลนคร สำเร็จ',
                'updated_at' => current_time('mysql')
            ), 200);
        },
        'permission_callback' => function() {
            return current_user_can('manage_options');
        }
    ));

    // 3. POST Test Telegram Bot
    register_rest_route('spm/v1', '/telegram-test', array(
        'methods'  => 'POST',
        'callback' => function() {
            $settings = spm_get_settings();
            $token = $settings['telegram_bot_token'];
            $chatId = $settings['telegram_chat_id'];

            if (empty($token) || empty($chatId)) {
                return new WP_REST_Response(array('status' => 'error', 'message' => 'กรุณาระบุ Telegram Bot Token และ Chat ID ให้ครบถ้วน'), 400);
            }

            $testMsg = "🔔 <b>[ทดสอบระบบแจ้งเตือน สพม.สกลนคร]</b>\nระบบเชื่อมต่อ WordPress กับ Telegram Bot สำเร็จ 100%\n⏰ " . current_time('d/m/Y H:i:s');
            $url = "https://api.telegram.org/bot{$token}/sendMessage";
            $response = wp_remote_post($url, array(
                'headers' => array('Content-Type' => 'application/json'),
                'body'    => json_encode(array('chat_id' => $chatId, 'text' => $testMsg, 'parse_mode' => 'HTML')),
                'timeout' => 15
            ));

            if (is_wp_error($response)) {
                return new WP_REST_Response(array('status' => 'error', 'message' => $response->get_error_message()), 500);
            }
            return new WP_REST_Response(array('status' => 'success', 'message' => 'ส่งข้อความทดสอบเข้า Telegram เรียบร้อยแล้ว!'), 200);
        },
        'permission_callback' => function() {
            return current_user_can('manage_options');
        }
    ));

    // 4. POST /wp-json/spm/v1/track (Server-Side Proxy for DocumantStudio Quick Track)
    register_rest_route('spm/v1', '/track', array(
        'methods'  => 'POST',
        'callback' => function($request) {
            $params = $request->get_json_params();
            if (empty($params)) {
                $params = $request->get_params();
            }
            $trackingCode = isset($params['tracking_code']) ? sanitize_text_field($params['tracking_code']) : '';
            $last4 = isset($params['last4_id_card']) ? sanitize_text_field($params['last4_id_card']) : '';

            if (empty($trackingCode)) {
                return new WP_REST_Response(array('ok' => false, 'error' => array('message' => 'กรุณาระบุรหัสติดตามคำขอ')), 400);
            }

            $settings = spm_get_settings();
            $gasUrl = !empty($settings['documantstudio_webapp_url']) 
                ? $settings['documantstudio_webapp_url'] 
                : 'https://script.google.com/macros/s/AKfycbzQJTG5qq-ZH4OJ6XpcMA8_e2cBQmAJjUjRmIvDvywAN0CsGRjIaV0Ibxgj_4bIhWmv/exec';

            $targetUrl = add_query_arg(array(
                'command' => 'request.quickTrack',
                'payload' => wp_json_encode(array(
                    'trackingCode' => $trackingCode,
                    'last4IdCard'  => $last4
                ))
            ), $gasUrl);

            // Server-to-Server request (Zero CORS!)
            $response = wp_remote_get($targetUrl, array(
                'timeout'     => 20,
                'redirection' => 5,
                'sslverify'   => false
            ));

            if (is_wp_error($response)) {
                return new WP_REST_Response(array('ok' => false, 'error' => array('message' => 'การเชื่อมต่อกับ DocumantStudio ขัดข้อง: ' . $response->get_error_message())), 500);
            }

            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return new WP_REST_Response(array('ok' => false, 'error' => array('message' => 'รูปแบบข้อมูลตอบกลับจากระบบไม่ถูกต้อง')), 502);
            }

            return new WP_REST_Response($data, 200);
        },
        'permission_callback' => '__return_true'
    ));

    // 5. GET /wp-json/spm/v1/services (Dynamic e-Service Catalog Proxy)
    register_rest_route('spm/v1', '/services', array(
        'methods'  => 'GET',
        'callback' => function() {
            $settings = spm_get_settings();
            $gasUrl = !empty($settings['documantstudio_webapp_url']) 
                ? $settings['documantstudio_webapp_url'] 
                : 'https://script.google.com/macros/s/AKfycbzQJTG5qq-ZH4OJ6XpcMA8_e2cBQmAJjUjRmIvDvywAN0CsGRjIaV0Ibxgj_4bIhWmv/exec';

            $targetUrl = add_query_arg(array('command' => 'catalog.listServices'), $gasUrl);
            $response = wp_remote_get($targetUrl, array('timeout' => 15, 'redirection' => 5, 'sslverify' => false));

            if (!is_wp_error($response)) {
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                if (isset($data['ok']) && $data['ok'] && !empty($data['data'])) {
                    return new WP_REST_Response($data['data'], 200);
                }
            }
            return new WP_REST_Response(array(), 200);
        },
        'permission_callback' => '__return_true'
    ));
});

// =========================================================================================
// 4. ADMIN SETTINGS PAGE RENDERER
// =========================================================================================
function spm_render_admin_settings_page() {
    if (!current_user_can('manage_options')) return;

    // Handle Form Save
    $saved_notice = false;
    if (isset($_POST['spm_save_nonce']) && wp_verify_nonce($_POST['spm_save_nonce'], 'spm_save_action')) {
        $current = spm_get_settings();
        $allowed = array_keys(spm_get_default_settings());
        foreach ($allowed as $k) {
            if (isset($_POST[$k])) {
                $current[$k] = sanitize_text_field(wp_unslash($_POST[$k]));
            }
        }
        update_option('spm_portal_settings', $current);
        $saved_notice = true;
    }

    $s = spm_get_settings();
    ?>
    <div class="wrap spm-admin-wrap">
        <!-- Header -->
        <div class="spm-admin-header">
            <div>
                <h1 class="spm-header-title"><i class="fa-solid fa-landmark"></i> จัดการเนื้อหา สพม.สกลนคร (SPM Control Center)</h1>
                <div class="spm-header-sub">ศูนย์บัญชาการพอร์ทัลหลัก สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร • REST API v1</div>
            </div>
            <div>
                <a href="<?php echo esc_url(rest_url('spm/v1/settings')); ?>" target="_blank" style="color:#FFF; background:rgba(255,255,255,0.15); padding:8px 16px; border-radius:8px; text-decoration:none; font-size:12px; font-weight:700;">
                    <i class="fa-solid fa-code"></i> ดูข้อมูล JSON API
                </a>
            </div>
        </div>

        <?php if ($saved_notice): ?>
            <div style="background:#ECFDF5; border:1px solid #10B981; color:#065F46; padding:12px 18px; border-radius:10px; margin-bottom:20px; font-weight:700;">
                <i class="fa-solid fa-circle-check"></i> บันทึกข้อมูลการตั้งค่า สพม.สกลนคร เรียบร้อยแล้ว!
            </div>
        <?php endif; ?>

        <form method="post" action="">
            <?php wp_nonce_field('spm_save_action', 'spm_save_nonce'); ?>

            <!-- Navigation Tabs -->
            <div class="spm-tabs-nav">
                <button type="button" class="spm-tab-btn active" onclick="switchSpmTab('tab-hero', this)"><i class="fa-solid fa-house"></i> หน้าแรก & วิสัยทัศน์</button>
                <button type="button" class="spm-tab-btn" onclick="switchSpmTab('tab-execs', this)"><i class="fa-solid fa-user-tie"></i> คณะผู้บริหาร (4 ท่าน)</button>
                <button type="button" class="spm-tab-btn" onclick="switchSpmTab('tab-stats', this)"><i class="fa-solid fa-chart-line"></i> สถิติ Live Cockpit</button>
                <button type="button" class="spm-tab-btn" onclick="switchSpmTab('tab-groups', this)"><i class="fa-solid fa-sitemap"></i> 9 กลุ่ม 1 หน่วย (เบอร์ต่อ)</button>
                <button type="button" class="spm-tab-btn" onclick="switchSpmTab('tab-telegram', this)"><i class="fa-brands fa-telegram"></i> Telegram & GAS</button>
                <button type="button" class="spm-tab-btn" onclick="switchSpmTab('tab-contact', this)"><i class="fa-solid fa-address-book"></i> ที่อยู่ & การติดต่อ</button>
            </div>

            <!-- Tab 1: Hero & Vision -->
            <div id="tab-hero" class="spm-tab-content active">
                <h3 style="font-size:18px; font-weight:800; margin-bottom:20px; color:#060B19;">แบนเนอร์หลักและวิสัยทัศน์องค์กร</h3>
                
                <div class="spm-form-group">
                    <label class="spm-label">ข้อความประกาศด่วน (Notice Bar)</label>
                    <input type="text" name="notice_text" class="spm-input" value="<?php echo esc_attr($s['notice_text']); ?>">
                    <p class="spm-desc">แสดงที่แถบด้านบนสุดของหน้าเว็บ</p>
                </div>

                <div class="spm-form-group">
                    <label class="spm-label">หัวเรื่องหลัก Hero (Title 1)</label>
                    <input type="text" name="hero_title_1" class="spm-input" value="<?php echo esc_attr($s['hero_title_1']); ?>">
                </div>

                <div class="spm-form-group">
                    <label class="spm-label">หัวเรื่องรอง Hero (Title 2)</label>
                    <input type="text" name="hero_title_2" class="spm-input" value="<?php echo esc_attr($s['hero_title_2']); ?>">
                </div>

                <div class="spm-form-group">
                    <label class="spm-label">คำอธิบายภารกิจเขต (Hero Description)</label>
                    <textarea name="hero_desc" rows="3" class="spm-textarea"><?php echo esc_textarea($s['hero_desc']); ?></textarea>
                </div>

                <div class="spm-grid-2">
                    <div class="spm-form-group">
                        <label class="spm-label">ป้ายข้อความที่ 1</label>
                        <input type="text" name="hero_tag_1" class="spm-input" value="<?php echo esc_attr($s['hero_tag_1']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">ป้ายข้อความที่ 4 (ITA)</label>
                        <input type="text" name="hero_tag_4" class="spm-input" value="<?php echo esc_attr($s['hero_tag_4']); ?>">
                    </div>
                </div>
            </div>

            <!-- Tab 2: Executives -->
            <div id="tab-execs" class="spm-tab-content">
                <h3 style="font-size:18px; font-weight:800; margin-bottom:20px; color:#060B19;">ทำเนียบผู้บริหารระดับสูง สพม.สกลนคร</h3>
                
                <!-- Director -->
                <div style="background:#FDF9EC; padding:20px; border-radius:12px; border:1px solid #ECC86A; margin-bottom:20px;">
                    <h4 style="color:#B8860B; margin:0 0 12px 0;">ผู้อำนวยการ สพม.สกลนคร</h4>
                    <div class="spm-grid-2">
                        <div class="spm-form-group">
                            <label class="spm-label">ชื่อ-นามสกุล ผอ.เขต</label>
                            <input type="text" name="director_name" class="spm-input" value="<?php echo esc_attr($s['director_name']); ?>">
                        </div>
                        <div class="spm-form-group">
                            <label class="spm-label">เบอร์โทรศัพท์ภายใน</label>
                            <input type="text" name="director_ext" class="spm-input" value="<?php echo esc_attr($s['director_ext']); ?>">
                        </div>
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">ข้อความวิสัยทัศน์ (Quote)</label>
                        <textarea name="director_quote" rows="2" class="spm-textarea"><?php echo esc_textarea($s['director_quote']); ?></textarea>
                    </div>
                </div>

                <!-- 3 Deputy Directors -->
                <div class="spm-grid-2">
                    <div class="spm-form-group">
                        <label class="spm-label">รอง ผอ. ท่านที่ 1 (วิชาการ/นิเทศ/DLICT)</label>
                        <input type="text" name="deputy_1_name" class="spm-input" value="<?php echo esc_attr($s['deputy_1_name']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">รอง ผอ. ท่านที่ 2 (บุคคล/พัฒนาครู/กฎหมาย)</label>
                        <input type="text" name="deputy_2_name" class="spm-input" value="<?php echo esc_attr($s['deputy_2_name']); ?>">
                    </div>
                </div>
                <div class="spm-form-group">
                    <label class="spm-label">รอง ผอ. ท่านที่ 3 (แผน/การเงิน/ตรวจสอบภายใน)</label>
                    <input type="text" name="deputy_3_name" class="spm-input" value="<?php echo esc_attr($s['deputy_3_name']); ?>">
                </div>
            </div>

            <!-- Tab 3: Live Cockpit Stats -->
            <div id="tab-stats" class="spm-tab-content">
                <h3 style="font-size:18px; font-weight:800; margin-bottom:20px; color:#060B19;">ตัวเลขสถิติและข้อมูลสารสนเทศ Cockpit</h3>
                
                <div class="spm-grid-2">
                    <div class="spm-form-group">
                        <label class="spm-label">จำนวนโรงเรียนในสังกัด (แห่ง)</label>
                        <input type="text" name="stat_schools_count" class="spm-input" value="<?php echo esc_attr($s['stat_schools_count']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">จำนวนครูและบุคลากร (คน)</label>
                        <input type="text" name="stat_teachers_count" class="spm-input" value="<?php echo esc_attr($s['stat_teachers_count']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">จำนวนนักเรียน (คน)</label>
                        <input type="text" name="stat_students_count" class="spm-input" value="<?php echo esc_attr($s['stat_students_count']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">คะแนน ITA ล่าสุด</label>
                        <input type="text" name="stat_ita_score" class="spm-input" value="<?php echo esc_attr($s['stat_ita_score']); ?>">
                    </div>
                </div>

                <div class="spm-form-group">
                    <label class="spm-label">ข้อความกำกับรอบซิงค์ข้อมูล (Data Sync Badge)</label>
                    <input type="text" name="data_sync_label" class="spm-input" value="<?php echo esc_attr($s['data_sync_label']); ?>">
                </div>
            </div>

            <!-- Tab 4: 9 Groups 1 Unit -->
            <div id="tab-groups" class="spm-tab-content">
                <h3 style="font-size:18px; font-weight:800; margin-bottom:20px; color:#060B19;">หมายเลขโทรศัพท์ภายใน 9 กลุ่ม 1 หน่วย</h3>
                
                <div class="spm-grid-2">
                    <div class="spm-form-group">
                        <label class="spm-label">1. กลุ่มอำนวยการ</label>
                        <input type="text" name="ext_group_1_admin" class="spm-input" value="<?php echo esc_attr($s['ext_group_1_admin']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">2. กลุ่มบริหารงานบุคคล</label>
                        <input type="text" name="ext_group_2_personnel" class="spm-input" value="<?php echo esc_attr($s['ext_group_2_personnel']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">3. กลุ่มนโยบายและแผน</label>
                        <input type="text" name="ext_group_3_plan" class="spm-input" value="<?php echo esc_attr($s['ext_group_3_plan']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">4. กลุ่มการเงินและสินทรัพย์</label>
                        <input type="text" name="ext_group_4_finance" class="spm-input" value="<?php echo esc_attr($s['ext_group_4_finance']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">5. กลุ่มนิเทศ ติดตามฯ</label>
                        <input type="text" name="ext_group_5_supervision" class="spm-input" value="<?php echo esc_attr($s['ext_group_5_supervision']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">6. กลุ่มส่งเสริมการจัดการศึกษา</label>
                        <input type="text" name="ext_group_6_promote" class="spm-input" value="<?php echo esc_attr($s['ext_group_6_promote']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">7. กลุ่มส่งเสริมการศึกษา DLICT</label>
                        <input type="text" name="ext_group_7_dlict" class="spm-input" value="<?php echo esc_attr($s['ext_group_7_dlict']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">8. กลุ่มพัฒนาครูและบุคลากรฯ</label>
                        <input type="text" name="ext_group_8_dev" class="spm-input" value="<?php echo esc_attr($s['ext_group_8_dev']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">9. กลุ่มกฎหมายและคดี</label>
                        <input type="text" name="ext_group_9_legal" class="spm-input" value="<?php echo esc_attr($s['ext_group_9_legal']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">10. หน่วยตรวจสอบภายใน</label>
                        <input type="text" name="ext_unit_10_audit" class="spm-input" value="<?php echo esc_attr($s['ext_unit_10_audit']); ?>">
                    </div>
                </div>
            </div>

            <!-- Tab 5: Telegram & GAS -->
            <div id="tab-telegram" class="spm-tab-content">
                <h3 style="font-size:18px; font-weight:800; margin-bottom:20px; color:#060B19;">การเชื่อมต่อ Telegram Bot & Google Apps Script (GAS)</h3>
                
                <div class="spm-form-group">
                    <label class="spm-label">Google Apps Script Web App URL</label>
                    <input type="url" name="gas_webapp_url" class="spm-input" placeholder="https://script.google.com/macros/s/XXXXX/exec" value="<?php echo esc_attr($s['gas_webapp_url']); ?>">
                    <p class="spm-desc">URL ที่ได้จากการ Deploy Google Apps Script (doPost)</p>
                </div>

                <div class="spm-grid-2">
                    <div class="spm-form-group">
                        <label class="spm-label">Telegram Bot Token (จาก @BotFather)</label>
                        <input type="password" id="spmTgToken" name="telegram_bot_token" class="spm-input" value="<?php echo esc_attr($s['telegram_bot_token']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">Telegram Chat ID (กลุ่มรับแจ้งเตือนคำร้อง)</label>
                        <input type="text" id="spmTgChatId" name="telegram_chat_id" class="spm-input" value="<?php echo esc_attr($s['telegram_chat_id']); ?>">
                    </div>
                </div>

                <div style="margin-top:16px;">
                    <button type="button" onclick="testTelegramConnection()" style="background:#0088cc; color:#FFF; border:none; padding:10px 20px; border-radius:8px; font-weight:700; cursor:pointer;">
                        <i class="fa-brands fa-telegram"></i> ทดสอบส่งแจ้งเตือน Telegram ทันที
                    </button>
                    <span id="tgTestResult" style="margin-left:14px; font-size:13px; font-weight:700;"></span>
                </div>
            </div>

            <!-- Tab: DocumantStudio e-Service Hub (Best Practice) -->
            <div id="tab-docstudio" class="spm-tab-content">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
                    <div>
                        <h3 style="font-size:18px; font-weight:800; color:#060B19; margin:0;">
                            🚀 บูรณาการ DocumantStudio e-Service Hub (Best Practice สพม.สกลนคร)
                        </h3>
                        <p style="font-size:12.5px; color:#64748B; margin:4px 0 0 0;">
                            เชื่อมโยงระบบขอรับเอกสารอิเล็กทรอนิกส์และการติดตามสถานะผ่าน Google Apps Script Serverless Architecture
                        </p>
                    </div>
                    <span style="background:#ECFDF5; color:#059669; font-size:12px; font-weight:700; padding:6px 14px; border-radius:20px; border:1px solid #A7F3D0;">
                        <i class="fa-solid fa-check-double"></i> Zero CORS & Drive Sync Ready
                    </span>
                </div>

                <div class="spm-form-group">
                    <label class="spm-label">DocumantStudio Web App URL (doGet/doPost)</label>
                    <input type="url" id="spmDocStudioUrl" name="documantstudio_webapp_url" class="spm-input" value="<?php echo esc_attr($s['documantstudio_webapp_url']); ?>" placeholder="https://script.google.com/macros/s/AKfycb.../exec">
                    <p class="spm-desc">URL ของ Google Apps Script ที่ Deploy เป็น Web App (สิทธิ์ Anyone)</p>
                </div>

                <div class="spm-grid-2">
                    <div class="spm-form-group">
                        <label class="spm-label">รูปแบบการเปิดฟอร์มคำขอ (Embed Mode)</label>
                        <select name="documantstudio_embed_mode" class="spm-input">
                            <option value="modal" <?php selected($s['documantstudio_embed_mode'], 'modal'); ?>>เปิดใน Modal หน้าต่างลอยบนเว็บเขต (Seamless Iframe - แนะนำ)</option>
                            <option value="new_tab" <?php selected($s['documantstudio_embed_mode'], 'new_tab'); ?>>เปิดในหน้าต่างเบราว์เซอร์ใหม่ (Direct New Tab)</option>
                        </select>
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">ระบบ Server-Side Proxy สำหรับติดตามคำขอ (Quick Track)</label>
                        <select name="documantstudio_proxy_enabled" class="spm-input">
                            <option value="1" <?php selected($s['documantstudio_proxy_enabled'], '1'); ?>>เปิดใช้งาน (ป้องกัน CORS 100% - แนะนำ)</option>
                            <option value="0" <?php selected($s['documantstudio_proxy_enabled'], '0'); ?>>ปิดใช้งาน</option>
                        </select>
                    </div>
                </div>

                <div style="background:#F8FAFC; border:1px dashed #CBD5E1; padding:16px; border-radius:12px; margin-top:16px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px;">
                    <div>
                        <strong style="font-size:13px; color:#1E293B;"><i class="fa-solid fa-satellite-dish" style="color:#D4AF37;"></i> ทดสอบการเชื่อมต่อ API Server-to-Server:</strong>
                        <div id="docStudioPingResult" style="font-size:12px; color:#64748B; margin-top:2px;">กดปุ่มเพื่อทดสอบ Ping สัญญาณดึงแค็ตตาล็อกบริการจาก Google Apps Script</div>
                    </div>
                    <button type="button" onclick="testDocStudioConnection()" style="background:#060B19; color:#ECC86A; border:1px solid #D4AF37; padding:9px 18px; border-radius:8px; font-weight:700; cursor:pointer;">
                        <i class="fa-solid fa-bolt"></i> ทดสอบดึงแค็ตตาล็อกบริการ (Test Ping)
                    </button>
                </div>
            </div>

            <!-- Tab 6: Contact & Office -->
            <div id="tab-contact" class="spm-tab-content">
                <h3 style="font-size:18px; font-weight:800; margin-bottom:20px; color:#060B19;">ข้อมูลสำนักงานและการติดต่อ</h3>
                
                <div class="spm-form-group">
                    <label class="spm-label">ที่อยู่สำนักงาน</label>
                    <input type="text" name="office_address" class="spm-input" value="<?php echo esc_attr($s['office_address']); ?>">
                </div>

                <div class="spm-grid-2">
                    <div class="spm-form-group">
                        <label class="spm-label">เบอร์โทรศัพท์กลาง</label>
                        <input type="text" name="office_phone" class="spm-input" value="<?php echo esc_attr($s['office_phone']); ?>">
                    </div>
                    <div class="spm-form-group">
                        <label class="spm-label">อีเมลติดต่อราชการ</label>
                        <input type="email" name="office_email" class="spm-input" value="<?php echo esc_attr($s['office_email']); ?>">
                    </div>
                </div>
            </div>

            <!-- Sticky Save Bar -->
            <div class="spm-save-bar">
                <div style="color:#FFF; font-size:13px;">
                    <i class="fa-solid fa-cloud-arrow-up" style="color:#ECC86A;"></i> บันทึกแล้วจะมีผลกับ REST API และหน้าเว็บทันที
                </div>
                <button type="submit" class="spm-btn-save">
                    <i class="fa-solid fa-floppy-disk"></i> บันทึกการตั้งค่า สพม.สกลนคร
                </button>
            </div>
        </form>
    </div>

    <script>
    function switchSpmTab(tabId, btn) {
        document.querySelectorAll('.spm-tab-btn').forEach(b => b.classList.remove('active'));
        document.querySelectorAll('.spm-tab-content').forEach(c => c.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById(tabId).classList.add('active');
    }

    async function testDocStudioConnection() {
        const resEl = document.getElementById('docStudioPingResult');
        resEl.style.color = '#B8860B';
        resEl.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> กำลังเชื่อมต่อกับ DocumantStudio...';

        try {
            const res = await fetch('<?php echo esc_url(rest_url('spm/v1/services')); ?>');
            const data = await res.json();
            if (res.ok && Array.isArray(data) && data.length > 0) {
                resEl.style.color = '#059669';
                resEl.innerHTML = '<i class="fa-solid fa-circle-check"></i> เชื่อมต่อสำเร็จ! พบ ' + data.length + ' บริการที่เผยแพร่อยู่ในระบบ (พร้อมให้บริการ)';
            } else {
                resEl.style.color = '#DC2626';
                resEl.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> เชื่อมต่อสำเร็จ แต่ยังไม่มีบริการที่สถานะ PUBLISHED ในฐานข้อมูล';
            }
        } catch (err) {
            resEl.style.color = '#DC2626';
            resEl.innerHTML = '<i class="fa-solid fa-circle-xmark"></i> การเชื่อมต่อล้มเหลว: ' + err.message;
        }
    }

    async function testTelegramConnection() {
        const resEl = document.getElementById('tgTestResult');
        resEl.style.color = '#B8860B';
        resEl.innerText = 'กำลังส่งข้อความทดสอบ...';

        try {
            const res = await fetch('<?php echo esc_url(rest_url('spm/v1/telegram-test')); ?>', {
                method: 'POST',
                headers: { 'X-WP-Nonce': '<?php echo wp_create_nonce('wp_rest'); ?>' }
            });
            const data = await res.json();
            if (res.ok) {
                resEl.style.color = '#10B981';
                resEl.innerText = '✅ ' + data.message;
            } else {
                resEl.style.color = '#EF4444';
                resEl.innerText = '❌ เกิดข้อผิดพลาด: ' + data.message;
            }
        } catch (err) {
            resEl.style.color = '#EF4444';
            resEl.innerText = '❌ เชื่อมต่อล้มเหลว: ' + err.message;
        }
    }
    </script>
    <?php
}


// =========================================================================
// 5. BULLETPROOF FRONT PAGE CORRUPTION GUARD
// =========================================================================
add_action('template_redirect', function() {
    if (is_front_page() || is_home() || (function_exists('is_page') && is_page(7))) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_content', 'wptexturize');
    }
}, 1);

add_filter('the_content', function($content) {
    if (is_front_page() || is_home() || (function_exists('is_page') && is_page(7))) {
        $content = preg_replace_callback('/<script[\s\S]*?<\/script>/i', function($matches) {
            return str_replace(array('&#038;', '&amp;'), '&', $matches[0]);
        }, $content);
    }
    return $content;
}, 9999);

// =========================================================================
// 6. LUXURY SINGLE POST TEMPLATE INTERCEPTOR (MATCHING SPM PORTAL AESTHETIC)
// =========================================================================
add_filter('template_include', function($template) {
    if (is_single()) {
        spm_render_luxury_single_post();
        exit;
    }
    return $template;
});

function spm_format_thai_date_full($timestamp) {
    $months = array(
        1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม',
        4 => 'เมษายน', 5 => 'พฤษภาคม', 6 => 'มิถุนายน',
        7 => 'กรกฎาคม', 8 => 'สิงหาคม', 9 => 'กันยายน',
        10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
    );
    $day = date('j', $timestamp);
    $m = (int)date('n', $timestamp);
    $year = (int)date('Y', $timestamp) + 543;
    return $day . ' ' . $months[$m] . ' ' . $year;
}

function spm_render_luxury_single_post() {
    global $post;
    $post_id = $post->ID;
    $title = get_the_title($post_id);
    $content = apply_filters('the_content', $post->post_content);
    $date_thai = spm_format_thai_date_full(strtotime($post->post_date));
    $thumb = get_the_post_thumbnail_url($post_id, 'full');
    $has_real_thumb = !empty($thumb);

    $cats = get_the_category($post_id);
    $cat_name = !empty($cats) ? $cats[0]->name : 'ข่าวประชาสัมพันธ์';
    $cat_slug = !empty($cats) ? $cats[0]->slug : 'news';
    $permalink = get_permalink($post_id);
    $s = spm_get_settings();

    // Related posts
    $related = get_posts(array(
        'posts_per_page' => 3,
        'post__not_in'   => array($post_id),
        'post_status'    => 'publish'
    ));
    ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo esc_html($title); ?> - สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร</title>

    <!-- OpenGraph & Social Meta -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr(wp_strip_all_tags(wp_trim_words($post->post_content, 35))); ?>">
    <meta property="og:image" content="<?php echo esc_url($thumb); ?>">
    <meta property="og:url" content="<?php echo esc_url($permalink); ?>">
    <meta property="og:site_name" content="สพม.สกลนคร">

    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'%3E%3Cpath fill='%23ECC86A' d='M320 32c-8.1 0-16.1 1.4-23.7 4.1L35.4 130.6C14.7 138 0 157.9 0 180s14.7 42 35.4 49.4l76.6 27.4v75.5c0 30.6 17.7 58.7 45.4 72l128 61.3c21.8 10.4 47.4 10.4 69.2 0l128-61.3c27.7-13.3 45.4-41.4 45.4-72V256.8l76.6-27.4c20.7-7.4 35.4-27.3 35.4-49.4s-14.7-42-35.4-49.4L343.7 36.1C336.1 33.4 328.1 32 320 32z'/%3E%3C/svg%3E">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=Sarabun:wght@300;400;500;600;700&family=K2D:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --indigo-950: #040814;
            --indigo-900: #060B19;
            --indigo-800: #0B1E4F;
            --indigo-700: #122659;
            --gold-500: #D4AF37;
            --gold-400: #ECC86A;
            --gold-300: #FFF3B0;
            --gold-600: #B8860B;
            --slate-900: #0F172A;
            --slate-800: #1E293B;
            --slate-700: #334155;
            --slate-600: #475569;
            --slate-500: #64748B;
            --slate-200: #E2E8F0;
            --slate-100: #F1F5F9;
            --slate-50:  #F8FAFC;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Sarabun', 'Google Sans', sans-serif;
            background: #F8FAFC;
            color: #1E293B;
            line-height: 1.8;
            -webkit-font-smoothing: antialiased;
        }

        /* Reading Progress Indicator */
        .progress-bar-wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            z-index: 10001;
            background: transparent;
        }
        .progress-bar-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #ECC86A 0%, #D4AF37 50%, #10B981 100%);
            transition: width 0.1s;
        }

        /* 1. Top Government Utility Bar */
        .top-gov-bar {
            background: #040814;
            color: #94A3B8;
            font-size: 12px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .top-gov-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }
        .top-gov-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(236, 200, 106, 0.15);
            border: 1px solid rgba(236, 200, 106, 0.3);
            color: #ECC86A;
            padding: 3px 10px;
            border-radius: 9999px;
            font-size: 11.5px;
            font-weight: 700;
        }
        .top-gov-links {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 12px;
        }
        .top-gov-links a {
            color: #CBD5E1;
            text-decoration: none;
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .top-gov-links a:hover {
            color: #ECC86A;
        }

        /* 2. Sticky Glass Navbar */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 9999;
            background: rgba(6, 11, 25, 0.94);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.25);
            padding: 12px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
        }
        .nav-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
        }
        .brand-emblem {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #060B19;
            background-image: linear-gradient(145deg, rgba(18, 57, 158, 0.8), rgba(6, 11, 25, 0.95));
            border: 1.5px solid var(--gold-400);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold-400);
            font-size: 20px;
            box-shadow: 0 4px 14px rgba(236, 200, 106, 0.25);
            flex-shrink: 0;
        }
        .related-thumb-fallback {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: linear-gradient(135deg, #060B19 0%, #0F172A 100%);
            color: var(--gold-400);
            font-size: 28px;
        }
        .related-thumb-fallback span {
            font-size: 11px;
            color: #94A3B8;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .brand-text h1 {
            color: #FFFFFF;
            font-family: 'Google Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            line-height: 1.25;
            letter-spacing: -0.2px;
        }
        .brand-text span {
            color: #94A3B8;
            font-size: 11px;
            font-weight: 500;
            display: block;
            margin-top: 2px;
            letter-spacing: 0.3px;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
            list-style: none;
        }
        .nav-links a {
            color: #E2E8F0;
            text-decoration: none;
            font-size: 13.5px;
            font-weight: 500;
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .nav-links a:hover {
            color: #ECC86A;
        }
        .btn-portal-back {
            background: linear-gradient(135deg, #ECC86A 0%, #D4AF37 50%, #B8860B 100%);
            color: #060B19 !important;
            padding: 8px 18px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.35);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-portal-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.5);
        }

        /* 3. Article Hero Section (Sakon Kram Theme) */
        .article-hero {
            background: #040814;
            background-image:
                linear-gradient(135deg, rgba(4, 8, 20, 0.98) 0%, rgba(6, 11, 25, 0.94) 50%, rgba(11, 30, 79, 0.9) 100%),
                radial-gradient(circle at 80% 20%, rgba(21, 39, 84, 0.6) 0%, transparent 60%);
            color: #FFFFFF;
            padding: 50px 0 75px 0;
            position: relative;
            border-bottom: 2px solid rgba(212, 175, 55, 0.35);
        }
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #94A3B8;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .breadcrumb a {
            color: #CBD5E1;
            text-decoration: none;
            transition: color 0.2s;
        }
        .breadcrumb a:hover {
            color: #ECC86A;
        }
        .breadcrumb span.divider {
            color: #475569;
        }
        .article-cat-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(236, 200, 106, 0.15);
            border: 1px solid rgba(236, 200, 106, 0.4);
            color: #ECC86A;
            padding: 4px 14px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 16px;
        }
        .article-title {
            font-family: 'Google Sans', 'Sarabun', sans-serif;
            font-size: clamp(26px, 4vw, 38px);
            font-weight: 800;
            color: #FFFFFF;
            line-height: 1.35;
            margin-bottom: 20px;
            letter-spacing: -0.3px;
            text-shadow: 0 2px 12px rgba(0,0,0,0.6);
        }
        .article-meta {
            display: flex;
            align-items: center;
            gap: 22px;
            font-size: 13.5px;
            color: #CBD5E1;
            flex-wrap: wrap;
        }
        .article-meta span {
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        /* 4. Main Article Content Container */
        .article-body-wrap {
            max-width: 920px;
            margin: -40px auto 70px auto;
            position: relative;
            z-index: 10;
            padding: 0 20px;
        }
        .article-card {
            background: #FFFFFF;
            border-radius: 24px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(6, 11, 25, 0.08);
            border: 1px solid #E2E8F0;
        }
        .article-thumb-img {
            width: 100%;
            max-height: 520px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 35px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid #E2E8F0;
        }
        .article-content {
            font-family: 'Sarabun', 'Google Sans', sans-serif;
            font-size: 18.5px;
            line-height: 1.95;
            color: #1E293B;
        }
        .article-content p {
            margin-bottom: 22px;
        }
        .article-content h1,
        .article-content h2,
        .article-content h3,
        .article-content h4 {
            font-family: 'Google Sans', 'Sarabun', sans-serif;
            color: #060B19;
            margin: 36px 0 18px 0;
            line-height: 1.35;
            font-weight: 700;
        }
        .article-content h2 {
            font-size: 25px;
            border-left: 4px solid #D4AF37;
            padding-left: 14px;
        }
        .article-content h3 {
            font-size: 21px;
            color: #0B1E4F;
        }
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 14px;
            margin: 24px 0;
            box-shadow: 0 6px 20px rgba(0,0,0,0.07);
        }
        .article-content blockquote {
            border-left: 4px solid #ECC86A;
            background: #FDF9EC;
            padding: 18px 24px;
            border-radius: 0 14px 14px 0;
            margin: 28px 0;
            color: #78350F;
            font-style: italic;
            font-size: 18px;
        }
        .article-content ul, .article-content ol {
            margin-left: 28px;
            margin-bottom: 22px;
        }
        .article-content li {
            margin-bottom: 8px;
        }

        /* Share & Actions Bar */
        .article-footer-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 32px;
            margin-top: 45px;
            border-top: 1px solid #E2E8F0;
            flex-wrap: wrap;
            gap: 18px;
        }
        .share-group {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }
        .share-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 18px;
            border-radius: 10px;
            font-size: 13.5px;
            font-weight: 600;
            text-decoration: none;
            color: #FFFFFF;
            cursor: pointer;
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .share-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .share-fb { background: #1877F2; }
        .share-line { background: #06C755; }
        .share-copy { background: #334155; }
        .share-print { background: #0F172A; }

        .btn-back-news {
            background: #F1F5F9;
            color: #0F172A;
            border: 1px solid #CBD5E1;
            padding: 10px 22px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }
        .btn-back-news:hover {
            background: #060B19;
            color: #FFFFFF;
            border-color: #060B19;
        }

        /* 5. Related News Section */
        .related-sec {
            margin-top: 50px;
        }
        .related-title {
            font-size: 22px;
            font-weight: 800;
            color: #060B19;
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .related-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }
        .related-card {
            background: #FFFFFF;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #E2E8F0;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(6, 11, 25, 0.08);
            border-color: #ECC86A;
        }
        .related-thumb {
            width: 100%;
            height: 160px;
            object-fit: cover;
            background: #060B19;
        }
        .related-content {
            padding: 18px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .related-card-title {
            font-size: 15px;
            font-weight: 700;
            color: #060B19;
            line-height: 1.45;
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .related-card-date {
            font-size: 12.5px;
            color: #64748B;
            margin-top: auto;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* 6. Luxury Footer */
        .footer {
            background: #040814;
            color: #94A3B8;
            padding: 65px 0 35px 0;
            border-top: 2px solid rgba(212, 175, 55, 0.35);
            margin-top: 90px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer h4 {
            color: #FFFFFF;
            font-size: 16.5px;
            font-weight: 700;
            margin-bottom: 18px;
            letter-spacing: -0.2px;
        }
        .footer p {
            font-size: 13.5px;
            margin-bottom: 10px;
            line-height: 1.7;
        }
        .footer a {
            color: #CBD5E1;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer a:hover {
            color: #ECC86A;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 12.5px;
            color: #64748B;
        }

        /* AI Floating Widget */
        .ai-floating-btn {
            position: fixed;
            bottom: 26px;
            right: 26px;
            background: linear-gradient(135deg, #060B19 0%, #0B1E4F 100%);
            border: 1.5px solid #ECC86A;
            color: #FFFFFF;
            padding: 10px 20px;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(6, 11, 25, 0.4);
            z-index: 990;
            font-size: 13px;
            font-weight: 700;
            transition: transform 0.2s;
        }
        .ai-floating-btn:hover {
            transform: scale(1.05);
            border-color: #FFF3B0;
        }
        .ai-pulse-dot {
            width: 8px;
            height: 8px;
            background: #10B981;
            border-radius: 50%;
            box-shadow: 0 0 8px #10B981;
        }

        @media (max-width: 900px) {
            .nav-links { display: none; }
            .article-card { padding: 25px 20px; }
            .related-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
            .top-gov-links { display: none; }
        }
    </style>
</head>
<body>

    <!-- Reading Progress Indicator -->
    <div class="progress-bar-wrap">
        <div class="progress-bar-fill" id="readingProgress"></div>
    </div>

    <!-- 1. Top Government Utility Bar -->
    <div class="top-gov-bar">
        <div class="container top-gov-wrap">
            <div style="display:flex; align-items:center; gap:10px;">
                <span class="top-gov-badge"><i class="fa-solid fa-landmark"></i> สพฐ. กระทรวงศึกษาธิการ</span>
                <span style="color: #CBD5E1; font-weight: 500;">สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร</span>
            </div>
            <div class="top-gov-links">
                <a href="tel:042728118"><i class="fa-solid fa-phone" style="color: #ECC86A;"></i> สายด่วน 042-728118</a>
                <span style="color:rgba(255,255,255,0.2);">|</span>
                <a href="tel:1579" style="color: #F87171;"><i class="fa-solid fa-shield-halved"></i> MOE Safety 1579</a>
            </div>
        </div>
    </div>

    <!-- 2. Sticky Glass Navbar -->
    <nav class="navbar">
        <div class="container nav-wrap">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand">
                <div class="brand-emblem">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="brand-text">
                    <h1>สพม.สกลนคร</h1>
                    <span>สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร</span>
                </div>
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house"></i> หน้าแรก</a></li>
                <li><a href="<?php echo esc_url(home_url('/#services')); ?>"><i class="fa-solid fa-cube"></i> บริการ 4 มิติ</a></li>
                <li><a href="<?php echo esc_url(home_url('/#cockpit')); ?>"><i class="fa-solid fa-users"></i> ผู้บริหารเขต</a></li>
                <li><a href="<?php echo esc_url(home_url('/#oit')); ?>"><i class="fa-solid fa-scale-balanced"></i> ITA & OIT</a></li>
                <li><a href="<?php echo esc_url(home_url('/#map')); ?>"><i class="fa-solid fa-school"></i> 45 สถานศึกษา</a></li>
            </ul>
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-portal-back">
                    <i class="fa-solid fa-arrow-left"></i> กลับสู่พอร์ทัลหลัก
                </a>
            </div>
        </div>
    </nav>

    <!-- 3. Article Hero Section -->
    <header class="article-hero">
        <div class="container" style="max-width: 920px;">
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house"></i> หน้าแรก</a>
                <span class="divider">/</span>
                <a href="<?php echo esc_url(home_url('/#news')); ?>">ข่าวประชาสัมพันธ์</a>
                <span class="divider">/</span>
                <span style="color: #ECC86A;"><?php echo esc_html($cat_name); ?></span>
            </div>

            <div class="article-cat-badge">
                <i class="fa-solid fa-tag"></i> <?php echo esc_html($cat_name); ?>
            </div>

            <h1 class="article-title"><?php echo esc_html($title); ?></h1>

            <div class="article-meta">
                <span><i class="fa-regular fa-calendar" style="color: #ECC86A;"></i> <?php echo esc_html($date_thai); ?></span>
                <span><i class="fa-solid fa-landmark" style="color: #60A5FA;"></i> สพม.สกลนคร</span>
                <span><i class="fa-regular fa-clock" style="color: #FBBF24;"></i> อ่าน ~2 นาที</span>
            </div>
        </div>
    </header>

    <!-- 4. Main Article Content Body -->
    <main class="article-body-wrap">
        <article class="article-card">
            <?php if ($has_real_thumb): ?>
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" class="article-thumb-img">
            <?php endif; ?>

            <div class="article-content">
                <?php echo $content; ?>
            </div>

            <!-- Footer Share & Action Bar -->
            <div class="article-footer-bar">
                <a href="<?php echo esc_url(home_url('/#news')); ?>" class="btn-back-news">
                    <i class="fa-solid fa-arrow-left"></i> กลับหน้ารวมข่าว
                </a>

                <div class="share-group">
                    <span style="font-size: 13px; font-weight: 700; color: #64748B;">แชร์ข่าวนี้:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($permalink); ?>" target="_blank" class="share-btn share-fb">
                        <i class="fa-brands fa-facebook"></i> Facebook
                    </a>
                    <a href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode($permalink); ?>" target="_blank" class="share-btn share-line">
                        <i class="fa-brands fa-line"></i> LINE
                    </a>
                    <button onclick="navigator.clipboard.writeText('<?php echo esc_js($permalink); ?>'); alert('คัดลอกลิงก์ข่าวประชาสัมพันธ์เรียบร้อยแล้ว!');" class="share-btn share-copy">
                        <i class="fa-solid fa-link"></i> คัดลอกลิงก์
                    </button>
                    <button onclick="window.print()" class="share-btn share-print" title="พิมพ์หน้านี้">
                        <i class="fa-solid fa-print"></i> พิมพ์
                    </button>
                </div>
            </div>
        </article>

        <!-- 5. Related Articles Grid -->
        <?php if (!empty($related)): ?>
        <section class="related-sec">
            <h3 class="related-title"><i class="fa-solid fa-newspaper" style="color: #ECC86A;"></i> ข่าวสารและประกาศอื่นที่เกี่ยวข้อง</h3>
            <div class="related-grid">
                <?php foreach ($related as $rel_post):
                    $rel_thumb = get_the_post_thumbnail_url($rel_post->ID, 'medium');
                    $rel_date = spm_format_thai_date_full(strtotime($rel_post->post_date));
                    $rel_cats = get_the_category($rel_post->ID);
                    $rel_cat_name = !empty($rel_cats) ? $rel_cats[0]->name : 'ข่าวสาร';
                ?>
                <a href="<?php echo esc_url(get_permalink($rel_post->ID)); ?>" class="related-card">
                    <?php if ($rel_thumb): ?>
                        <img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php echo esc_attr($rel_post->post_title); ?>" class="related-thumb">
                    <?php else: ?>
                        <div class="related-thumb related-thumb-fallback">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>สพม.สกลนคร</span>
                        </div>
                    <?php endif; ?>
                    <div class="related-content">
                        <span style="font-size:11px; font-weight:700; color:#B8860B; margin-bottom:4px;"><?php echo esc_html($rel_cat_name); ?></span>
                        <h4 class="related-card-title"><?php echo esc_html($rel_post->post_title); ?></h4>
                        <span class="related-card-date"><i class="fa-regular fa-calendar"></i> <?php echo esc_html($rel_date); ?></span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
    </main>

    <!-- 6. Official SPM Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4 style="display: flex; align-items: center; gap: 8px;">
                        <span class="brand-emblem" style="width:28px; height:28px; font-size:13px; display:inline-flex; border-radius:7px; vertical-align:middle; margin-right:6px;"><i class="fa-solid fa-graduation-cap"></i></span> สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร
                    </h4>
                    <p><?php echo esc_html(!empty($s['office_address']) ? $s['office_address'] : 'ศูนย์ราชการจังหวัดสกลนคร ถนนศูนย์ราชการ ตำบลธาตุเชิงชุม อำเภอเมือง จังหวัดสกลนคร 47000'); ?></p>
                    <p><i class="fa-solid fa-phone" style="color: #ECC86A;"></i> โทรศัพท์: <?php echo esc_html(!empty($s['office_phone']) ? $s['office_phone'] : '042-728118'); ?></p>
                    <p><i class="fa-solid fa-envelope" style="color: #ECC86A;"></i> อีเมลกลาง: <?php echo esc_html(!empty($s['office_email']) ? $s['office_email'] : 'saraban0242@moe.go.th'); ?></p>
                </div>
                <div>
                    <h4>บริการด่วน</h4>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>">หน้าหลักพอร์ทัล</a></p>
                    <p><a href="<?php echo esc_url(home_url('/#services')); ?>">ยื่นคำร้อง e-Service</a></p>
                    <p><a href="<?php echo esc_url(home_url('/#oit')); ?>">ศูนย์ข้อมูลสาธารณะ OIT 43</a></p>
                    <p><a href="<?php echo esc_url(home_url('/#map')); ?>">แผนที่พิกัด 45 สถานศึกษา</a></p>
                </div>
                <div>
                    <h4>ช่องทางติดต่อราชการ</h4>
                    <p><a href="<?php echo esc_url(!empty($s['facebook_url']) ? $s['facebook_url'] : 'https://facebook.com'); ?>" target="_blank"><i class="fa-brands fa-facebook" style="color: #1877F2;"></i> Facebook สพม.สกลนคร</a></p>
                    <p><a href="tel:1579" style="color: #F87171;"><i class="fa-solid fa-shield-halved"></i> ศูนย์ความปลอดภัย MOE Safety 1579</a></p>
                    <p><i class="fa-regular fa-clock" style="color: #ECC86A;"></i> เวลาทำการ: จันทร์ - ศุกร์ 08:30 - 16:30 น.</p>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo (int)date('Y') + 543; ?> สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร. สงวนลิขสิทธิ์ตามกฎหมาย.
            </div>
        </div>
    </footer>

    <!-- AI Concierge Floating Button -->
    <a href="<?php echo esc_url(home_url('/#cockpit')); ?>" class="ai-floating-btn" title="กลับสู่พอร์ทัลเพื่อปรึกษาน้องภูพาน AI">
        <span class="ai-pulse-dot"></span>
        <i class="fa-solid fa-robot" style="color: #ECC86A;"></i>
        <span>น้องภูพาน AI ประจำการ</span>
    </a>

    <script>
        // Reading Progress Indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            const bar = document.getElementById('readingProgress');
            if (bar) bar.style.width = scrolled + '%';
        });
    </script>
</body>
</html>
    <?php
}
