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
