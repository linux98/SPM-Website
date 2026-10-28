<?php
/**
 * Plugin Name: SPM Control Center & Portal Engine
 * Description: ระบบศูนย์บัญชาการจัดการพอร์ทัล สพม.สกลนคร และ REST API Bridge
 * Version: 3.2.0
 * Author: SESAO Sakon Nakhon
 */

// 1. Comprehensive Default Settings (70+ Configurable Keys)
function spm_get_default_settings() {
    return array(
        // Tab 1: ประกาศด่วน & หัวเว็บ (Alert & Header)
        'notice_enabled' => '1',
        'notice_badge' => '📢 ประกาศด่วน',
        'notice_text' => 'ยินดีต้อนรับสู่พอร์ทัลดิจิทัลอัจฉริยะ สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (SPM Smart Portal (สพม.สกลนคร))',
        'notice_link' => 'https://sesaosakon.go.th/site/e-service/',
        'top_ticker_org' => 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
        'school_name_th' => 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
        'school_name_en' => 'Secondary Educational Service Area Office Sakon Nakhon',
        'school_name_short' => 'สพม.สกลนคร • SESAO Sakon Nakhon',

        // Tab 2: แบนเนอร์หลัก & คำขวัญ (Hero & Mottos)
        'hero_badge' => 'SMART SECONDARY EDUCATION PLATFORM',
        'hero_title_1' => 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
        'hero_title_2' => 'สร้างสรรค์คนดี มีปัญญา ก้าวทันโลกดิจิทัล',
        'hero_desc' => 'มุ่งพัฒนาผู้เรียนระดับมัธยมศึกษาให้ใฝ่รู้ใฝ่เรียน มีระเบียบวินัย และมีสัมมาคารวะ ยกระดับผลสัมฤทธิ์ทางการเรียนด้วยนวัตกรรมและเทคโนโลยีสมัยใหม่ ภายใต้รั้วน้ำเงิน-ชมพู',
        'hero_btn1_text' => 'ระบบตรวจสอบผลการเรียน',
        'hero_btn1_link' => '#services',
        'hero_btn2_text' => 'แผนการเรียน ม.ต้น - ม.ปลาย',
        'hero_btn2_link' => '/site/curriculum/',
        'hero_chip1' => 'ใฝ่รู้ใฝ่เรียน',
        'hero_chip2' => 'มีระเบียบวินัย',
        'hero_chip3' => 'มีสัมมาคารวะ',
        'hero_chip4' => '271 ถ.ไอทียู ต.งิ้วด่อน อ.เมืองสกลนคร',

        // Tab 3: อัตลักษณ์ ปรัชญา และวิสัยทัศน์ (Core Values & Identity)
        'school_motto' => 'สกลนครพัฒนศึกษา ก้าวสู่ความเป็นเลิศ ทางวิชาการ เทคโนโลยี และสิ่งแวดล้อม',
        'school_philosophy' => 'ปญฺญา นรานํ รตนํ • ปัญญาเป็นที่พึ่งของนรชน',
        'school_vision' => 'มุ่งมั่นจัดการศึกษามาตรฐานสากล พัฒนาผู้เรียนสู่ศตวรรษที่ 21 บนพื้นฐานความเป็นไทยและใส่ใจสิ่งแวดล้อม',
        'school_identity' => 'สิ่งแวดล้อมดี มีเทคโนโลยี ก้าวสู่วิถีคุณภาพ',
        'school_uniqueness' => 'ยิ้มง่าย ไหว้สวย รวยน้ำใจ ใฝ่เรียนรู้',
        'school_colors' => 'น้ำเงิน - ชมพู',
        'school_tree' => 'ต้นราชพฤกษ์ (ดอกคูน)',

        // Tab 4: คณะผู้บริหารสถานศึกษา (Executive Leadership)
        'director_name' => 'นายนรงณ์ เห็นหลอด',
        'director_title' => 'ผู้อำนวยการสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
        'director_image' => 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/director.jpg',
        'director_message' => 'มุ่งมั่นยกระดับคุณภาพการศึกษามัธยมศึกษาสกลนคร สู่มาตรฐานสากลด้วยดิจิทัลและนวัตกรรม และการบริหารจัดการอย่างมีประสิทธิภาพ โปร่งใส',
        'deputy_academic' => 'นายชลาวุธ สามาอาพัฒน์',
        'deputy_budget' => 'ดร.บุญธรรม อ้วนกันยา',
        'deputy_personnel' => 'นางสาววัชราภรณ์ ปัฏนา',
        'deputy_general' => '',
        'deputy1_name' => 'นายชลาวุธ สามาอาพัฒน์',
        'deputy1_title' => 'รองผู้อำนวยการ สพม.สกลนคร (คนที่ 1)',
        'deputy1_image' => 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy1.jpg',
        'deputy1_scope' => 'กำกับ: การเงินฯ, ส่งเสริมฯ, DLICT • ดูแล: เบญจรักษ์, พระธาตุนารายณ์ฯ, ลุ่มน้ำอูน',
        'deputy1_quote' => 'ขับเคลื่อนการบริหารการเงินโปร่งใส ยกระดับการศึกษาทางไกลดิจิทัล และส่งเสริมโอกาสทางการเรียนรู้ของนักเรียนอย่างเท่าเทียม',
        'deputy2_name' => 'ดร.บุญธรรม อ้วนกันยา',
        'deputy2_title' => 'รองผู้อำนวยการ สพม.สกลนคร (คนที่ 2)',
        'deputy2_image' => 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy2.jpg',
        'deputy2_scope' => 'กำกับ: อำนวยการ, บุคคล, พัฒนาครูฯ • ดูแล: สว่างศึกษา, เทพทวีพัฒน์',
        'deputy2_quote' => 'บริหารงานบุคคลด้วยความถูกต้องเป็นธรรม พัฒนาสมรรถนะครูสู่ความเป็นเลิศ พร้อมเสริมสร้างขวัญกำลังใจและระบบ ว.PA',
        'deputy3_name' => 'นางสาววัชราภรณ์ ปัฏนา',
        'deputy3_title' => 'รองผู้อำนวยการ สพม.สกลนคร (คนที่ 3)',
        'deputy3_image' => 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy3.jpg',
        'deputy3_scope' => 'กำกับ: นิเทศ ติดตามฯ, นโยบายและแผน • ดูแล: ดำรงธรรม, สหสกลราช, สหเบญจพัฒน์',
        'deputy3_quote' => 'ขับเคลื่อนนโยบายสู่การปฏิบัติอย่างเป็นรูปธรรม นิเทศการจัดการศึกษาเชิงรุก ยกระดับหลักสูตรและประกันคุณภาพการศึกษาสู่มาตรฐานสากล',

        // Tab 5: ระบบบริการดิจิทัล 8 เสาหลัก (One-Stop 8 Digital Services)
        'srv_sgs_title' => 'ระบบดูเกรดออนไลน์ (DoGrade / SGS)',
        'srv_sgs_desc' => 'ตรวจสอบผลการเรียนด้วยเลขประจำตัวนักเรียน 5 หลัก หรือเลขบัตรประชาชน 13 หลัก',
        'srv_sgs_url' => 'https://www.dograde.online/sps/',
        
        'srv_reg_title' => 'ติดต่องานทะเบียน / ขอเอกสาร ปพ.',
        'srv_reg_desc' => 'ยื่นคำร้องขอใบ ปพ.1, ปพ.7 และรีเซ็ตรหัสผ่านดูเกรดผ่านระบบออนไลน์',
        'srv_reg_url' => '/site/e-service/',

        'srv_lms_title' => 'ห้องเรียนดิจิทัล (Google Classroom / LMS)',
        'srv_lms_desc' => 'เข้าสู่ชั้นเรียนออนไลน์ ส่งการบ้าน และรับสื่อการเรียนรู้รายสัปดาห์',
        'srv_lms_url' => 'https://classroom.google.com',

        'srv_adm_title' => 'ระบบรับสมัครนักเรียนออนไลน์ (Admission)',
        'srv_adm_desc' => 'สมัครเข้าศึกษาต่อระดับชั้น ม.1 และ ม.4 ประจำปีการศึกษา 2569 ตรวจสอบรายชื่อและผลสอบ',
        'srv_adm_url' => '/site/e-service/',

        'srv_esrv_title' => 'คำร้องและบริการออนไลน์ (One-Stop e-Service)',
        'srv_esrv_desc' => 'ดาวน์โหลดแบบฟอร์มคำร้อง ยื่นเอกสารราชการ และติดตามสถานะคำร้องแบบเรียลไทม์',
        'srv_esrv_url' => '/site/e-service/',

        'srv_obec_title' => 'คลังบทเรียนและสื่อดิจิทัล (OBEC Content Center)',
        'srv_obec_desc' => 'เข้าถึงคลังสื่อการสอนอิเล็กทรอนิกส์ คลังข้อสอบ และแบบฝึกทักษะ 8 กลุ่มสาระ',
        'srv_obec_url' => 'https://contentcenter.obec.go.th',

        'srv_mag_title' => 'วารสารและประชาสัมพันธ์ สพม.สกลนคร (SPM e-Magazine)',
        'srv_mag_desc' => 'อ่านจดหมายข่าว วารสารร่มจามจุรี และภาพข่าวกิจกรรมสำคัญของโรงเรียน',
        'srv_mag_url' => '/site/#news',

        'srv_saraban_title' => 'ติดต่องานธุรการและสารบรรณ (e-Saraban)',
        'srv_saraban_desc' => 'ส่งหนังสือราชการ ติดต่อประสานงานภายนอก และขอใช้สถานที่หอประชุม',
        'srv_saraban_url' => '/site/e-service/',

        // Tab 6: สิ่งแวดล้อม & สถิติเปิด (Green Campus & Solar)
        'solar_power_kwh' => '148 kWh/วัน',
        'solar_carbon_ton' => '24.8 ตัน/ปี',
        'green_tree_percent' => '65%',
        'waste_recycle_percent' => '82%',
        'solar_station_title' => 'พลังงานสะอาด Solar Rooftop อาคาร 2 & 3',

        // Tab 7: สถิติตัวเลข & TCAS เกียรติยศ (Counters & Analytics)
        'stat_students' => '2,450+',
        'stat_teachers' => '120+',
        'stat_tcas' => '100%',
        'stat_awards' => '45+',
        'stat_classrooms' => '60 ห้อง',
        'stat_area' => '68 ไร่',
        
        'tcas_uni_1_name' => 'มหาวิทยาลัยขอนแก่น (มข.)',
        'tcas_uni_1_val' => '42%',
        'tcas_uni_1_count' => '168 คน',
        'tcas_uni_2_name' => 'จุฬาลงกรณ์ฯ / ธรรมศาสตร์ / มหิดล',
        'tcas_uni_2_val' => '24%',
        'tcas_uni_2_count' => '96 คน',
        'tcas_uni_3_name' => 'มหาวิทยาลัยมหาสารคาม / เกษตรศาสตร์',
        'tcas_uni_3_val' => '20%',
        'tcas_uni_3_count' => '80 คน',
        'tcas_uni_4_name' => 'สถาบันอุดมศึกษาอื่นๆ & สายวิชาชีพ',
        'tcas_uni_4_val' => '14%',
        'tcas_uni_4_count' => '56 คน',

        // Tab 8: ปฏิทินปฏิบัติงาน 3 กิจกรรม (Academic Timeline Events)
        'ev1_day' => '01',
        'ev1_month' => 'พ.ย.',
        'ev1_title' => 'กำหนดการเปิดภาคเรียนที่ 2 ปีการศึกษา 2569',
        'ev1_desc' => 'นักเรียนระดับชั้น ม.1 - ม.6 เข้าแถวเคารพธงชาติและพบครูที่ปรึกษา',

        'ev2_day' => '19',
        'ev2_month' => 'มิ.ย.',
        'ev2_title' => 'วันคล้ายวันสถาปนาสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
        'ev2_desc' => 'ครบรอบการก่อตั้งโรงเรียน พิธีทำบุญตักบาตรและมอบทุนการศึกษา',

        'ev3_day' => '25',
        'ev3_month' => 'พ.ย.',
        'ev3_title' => 'กิจกรรมประชุมผู้ปกครองเครือข่ายและชั้นเรียน',
        'ev3_desc' => 'ร่วมสร้างความร่วมมือระหว่างบ้านและโรงเรียนในการดูแลช่วยเหลือนักเรียน',

        // Tab 9: คำถามที่พบบ่อย (FAQ 3 ข้อ)
        'faq1_q' => 'การยื่นขอหนังสือรับรองเงินเดือนและสิทธิประโยชน์ข้าราชการครู ผ่านระบบ e-Services ทำอย่างไร?',
        'faq1_a' => 'สำหรับนักเรียนให้กรอกเลขประจำตัวนักเรียน 5 หลัก หรือเลขประจำตัวประชาชน 13 หลัก ส่วนผู้ปกครองใช้เลขประจำตัวประชาชน 13 หลักพร้อมวันเดือนปีเกิดของนักเรียน (เช่น 31/12/2553) หากเข้าไม่ได้ติดต่อขอปรับรหัสได้ที่นายทะเบียนวัดผล',
        
        'faq2_q' => 'การติดต่อขอเอกสาร ปพ.1 และ ปพ.7 ต้องเตรียมอะไรบ้าง?',
        'faq2_a' => 'เตรียมรูปถ่ายชุดนักเรียนขนาด 1.5 นิ้ว (ถ่ายไม่เกิน 6 เดือน) และบัตรประจำตัวนักเรียนหรือบัตรประชาชน ติดต่อยื่นคำร้องได้ที่ห้องทะเบียน-วัดผล กลุ่มบริหารงานวิชาการ ในวันและเวลาราชการ',

        'faq3_q' => 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร ตั้งอยู่ที่ใดและติดต่อช่องทางไหนได้บ้าง?',
        'faq3_a' => 'ตั้งอยู่ที่ 271 ถนน ไอ ที ยู ตำบล งิ้วด่อน อำเภอเมืองสกลนคร สกลนคร 47000 โทรศัพท์ 042-711-456 หรือติดต่อทางแฟนเพจ Facebook',

        // Tab 10: ความโปร่งใส & ITA (Transparency & OIT)
        'ita_score' => '98.50 คะแนน (ระดับ AA)',
        'ita_year' => 'ปีงบประมาณ 2569',
        'ita_link' => '/site/ita/',

        // Tab 11: ข้อมูลติดต่อ โซเชียล & ท้ายเว็บ (Contact, Social & Footer)
        'phone' => '042-711-456',
        'phone_hotline' => '042-728-195',
        'fax' => '042-711-457',
        'email' => 'contact@sesaosakon.go.th',
        'office_hours' => 'จันทร์ - ศุกร์: 08:30 - 16:30 น. (เว้นวันหยุดราชการ)',
        'address' => '271 ถนน ไอ ที ยู ตำบล งิ้วด่อน อำเภอเมืองสกลนคร สกลนคร 47000',
        'google_maps_url' => 'https://www.google.com/maps/place/สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร/@17.1459455,104.1531959,17z',

        'facebook_url' => 'https://www.facebook.com/sakolnakornpat',
        'line_id' => '@sesaosakon',
        'youtube_url' => 'https://www.youtube.com',
        'tiktok_url' => 'https://www.tiktok.com',
        'instagram_url' => 'https://www.instagram.com',

        'school_code_10' => '1047540628',
        'school_code_smis' => '47012003',
        'school_code_obec' => '540628',
        'school_code_line' => 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร) | สพฐ. กระทรวงศึกษาธิการ',
        'footer_copyright' => '© 2026 สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (Sakonnakhonpatanasuksa School). All Rights Reserved.',
        'footer_colors' => 'สีประจำโรงเรียน: น้ำเงิน - ชมพู | ปัญญา นรานํ รตนํ',

        // Tab 12: ผู้ช่วย AI น้องภูพาน AI (AI Bot Assistant)
        'ai_bot_name' => 'น้องภูพาน AI AI',
        'ai_bot_status' => 'ออนไลน์ พร้อมตอบคำถาม 24 ชม.',
        'ai_welcome_text' => 'สวัสดีครับ! ผมคือ น้องภูพาน AI AI ผู้ช่วยดิจิทัลสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร ยินดีต้อนรับนักเรียน ผู้ปกครอง และคุณครูครับ มีเรื่องไหนให้ผมช่วยแนะนำไหมครับ?',

        // Tab 13: ธีมสีน้ำเงินคราม-เหลืองทอง & อัตลักษณ์ สพม. (Sakon Kram & Royal Gold)
        'theme_preset' => 'spm_kram_gold',
        'theme_primary' => '#0F172A',
        'theme_primary_dark' => '#060B19',
        'theme_secondary' => '#1E40AF',
        'theme_secondary_dark' => '#1E3A8A',
        'theme_secondary_light' => '#3B82F6',
        'theme_gold' => '#EAB308',

        // Tab 14: พิมพ์เขียวดิจิทัล & ศูนย์จำลองข้อมูลเครือข่าย สพม.
        'blueprint_version' => '2.0.0-PRO',
        'school_jurisdiction' => 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
        'school_district' => 'อำเภอเมืองสกลนคร',
        'school_province' => 'จังหวัดสกลนคร',
        'school_lat' => '17.1459455',
        'school_lon' => '104.1531959'
    );
}

function spm_get_settings() {
    $defaults = spm_get_default_settings();
    $saved = get_option('spm_portal_settings', array());
    return wp_parse_args($saved, $defaults);
}

// 2. Enable WordPress Media Uploader for SPM Control Center
add_action('admin_enqueue_scripts', function($hook) {
    if (isset($_GET['page']) && $_GET['page'] === 'spm-portal-settings') {
        wp_enqueue_media();
    }
});

// 2. Add Top-Level Menu in WP Admin
add_action('admin_menu', function() {
    add_menu_page(
        'จัดการเนื้อหา สพม.',
        '🏫 จัดการเนื้อหา สพม.',
        'manage_options',
        'spm-portal-settings',
        'spm_render_admin_page',
        'dashicons-welcome-learn-more',
        2
    );
});

// Enqueue Google Sans & K2D Fonts in WP Admin Head for SPS Settings

// 2.2 Inject Live SPM Settings into Front Page Head (Instant Zero-Latency Hydration)
add_action('wp_head', function() {
    $settings = spm_get_settings();
    echo '<script>window.SPM_SERVER_SETTINGS = ' . wp_json_encode($settings) . ';</script>' . "\n";
}, 1);

add_action('admin_head', function() {
    if (isset($_GET['page']) && $_GET['page'] === 'spm-portal-settings') {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
        echo '<link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=K2D:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">' . "\n";
        echo '<style>
            #wpbody-content .wrap.sps-admin-root,
            #wpbody-content .wrap.sps-admin-root *,
            .sps-admin-root,
            .sps-admin-root *,
            .spm-sticky-bar,
            .spm-sticky-bar * {
                font-family: "Google Sans", "K2D", -apple-system, BlinkMacSystemFont, sans-serif !important;
            }
        </style>' . "\n";
    }
});

// 3. Register REST API: GET & POST /wp-json/spm/v1/settings
add_action('rest_api_init', function() {
    
    // 3.1 POST /wp-json/spm/v1/track (Server-Side Proxy for DocumantStudio Quick Track)
    register_rest_route('spm/v1', '/track', array(
        'methods'  => 'POST',
        'callback' => function($request) {
            $params = $request->get_json_params();
            if (empty($params)) $params = $request->get_params();
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
                'payload' => wp_json_encode(array('trackingCode' => $trackingCode, 'last4IdCard' => $last4))
            ), $gasUrl);

            $response = wp_remote_get($targetUrl, array('timeout' => 20, 'redirection' => 5, 'sslverify' => false));
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

    // 3.2 GET /wp-json/spm/v1/services (Dynamic e-Service Catalog Proxy)
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

    // 3.3 POST /wp-json/spm/v1/telegram-test
    register_rest_route('spm/v1', '/telegram-test', array(
        'methods'  => 'POST',
        'callback' => function() {
            $settings = spm_get_settings();
            $bot_token = $settings['telegram_bot_token'] ?? '';
            $chat_id = $settings['telegram_chat_id'] ?? '';
            if (empty($bot_token) || empty($chat_id)) {
                return new WP_REST_Response(array('status' => 'error', 'message' => 'กรุณากรอก Telegram Bot Token และ Chat ID ก่อนทดสอบ'), 400);
            }
            $msg = "🔔 ทดสอบการแจ้งเตือนจากศูนย์บัญชาการ สพม.สกลนคร\n⏰ เวลา: " . date_i18n('j F Y H:i:s') . "\n✅ ระบบพร้อมทำงาน!";
            $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
            $res = wp_remote_post($url, array(
                'body' => array('chat_id' => $chat_id, 'text' => $msg, 'parse_mode' => 'HTML')
            ));
            if (is_wp_error($res)) {
                return new WP_REST_Response(array('status' => 'error', 'message' => $res->get_error_message()), 500);
            }
            return new WP_REST_Response(array('status' => 'success', 'message' => 'ส่งข้อความทดสอบเข้า Telegram เรียบร้อยแล้ว!'), 200);
        },
        'permission_callback' => function() { return current_user_can('manage_options'); }
    ));
    
    register_rest_route('spm/v1', '/settings', array(
        'methods' => 'GET',
        'callback' => function() {
            $response = new WP_REST_Response(spm_get_settings(), 200);
            $response->header('Cache-Control', 'no-cache, no-store, must-revalidate, max-age=0');
            $response->header('Pragma', 'no-cache');
            $response->header('Expires', '0');
            return $response;
        },
        'permission_callback' => '__return_true'
    ));

    
    register_rest_route('spm/v1', '/settings', array(
        'methods' => 'POST',
        'callback' => function($request) {
            $params = $request->get_json_params();
            if (empty($params)) {
                $params = $request->get_params();
            }
            $current = spm_get_settings();
            $allowed_keys = array_keys(spm_get_default_settings());
            foreach ($allowed_keys as $key) {
                if (isset($params[$key])) {
                    if (in_array($key, array('school_vision', 'director_message', 'ai_welcome_text', 'hero_desc', 'faq1_a', 'faq2_a', 'faq3_a'))) {
                        $current[$key] = sanitize_textarea_field(wp_unslash($params[$key]));
                    } else {
                        $current[$key] = sanitize_text_field(wp_unslash($params[$key]));
                    }
                }
            }
            update_option('spm_portal_settings', $current);
            return new WP_REST_Response(array('success' => true, 'data' => $current), 200);
        },
        'permission_callback' => function() {
            return current_user_can('manage_options');
        }
    ));

    // 3.4 GET /wp-json/spm/v1/edu-news (National Education News Aggregator)
    register_rest_route('spm/v1', '/edu-news', array(
        'methods'             => 'GET',
        'callback'            => 'spm_get_national_edu_news',
        'permission_callback' => '__return_true'
    ));
});

// Helper to extract image from RSS item or CDATA
function spm_extract_rss_image($item_xml, $fallback_url) {
    if (isset($item_xml->enclosure) && !empty($item_xml->enclosure['url'])) {
        return (string) $item_xml->enclosure['url'];
    }
    // Check media namespace
    $media = $item_xml->children('http://search.yahoo.com/mrss/');
    if (!empty($media->content) && !empty($media->content->attributes()->url)) {
        return (string) $media->content->attributes()->url;
    }
    // Check content:encoded for <img>
    $content = (string) $item_xml->children('http://purl.org/rss/1.0/modules/content/');
    if (!empty($content) && preg_match('|<img[^>]+src=["\']([^"\']+)["\']|i', $content, $m)) {
        return $m[1];
    }
    // Check description for <img>
    $desc = (string) $item_xml->description;
    if (!empty($desc) && preg_match('|<img[^>]+src=["\']([^"\']+)["\']|i', $desc, $m)) {
        return $m[1];
    }
    return $fallback_url;
}

// Helper to format National Education News response
function spm_format_edu_news_response($all_items, $source_filter) {
    $filtered = array();
    $counts = array('all' => count($all_items), 'obec' => 0, 'moe' => 0, 'otepc' => 0, 'dekd' => 0);

    foreach ($all_items as $item) {
        $sid = $item['source_id'] ?? 'other';
        if (isset($counts[$sid])) {
            $counts[$sid]++;
        }
        if ($source_filter === 'all' || $sid === $source_filter) {
            $filtered[] = $item;
        }
    }

    $response = new WP_REST_Response(array(
        'ok'         => true,
        'cached_at'  => date_i18n('Y-m-d H:i:s'),
        'total'      => count($filtered),
        'filter'     => $source_filter,
        'categories' => array(
            array('id' => 'all',   'name' => '🌟 ทั้งหมด', 'count' => $counts['all']),
            array('id' => 'obec',  'name' => '🏛️ สพฐ. (OBEC)', 'count' => $counts['obec']),
            array('id' => 'moe',   'name' => '🏫 ศธ. (กระทรวงฯ)', 'count' => $counts['moe']),
            array('id' => 'otepc', 'name' => '👔 ก.ค.ศ. & คุรุสภา', 'count' => $counts['otepc']),
            array('id' => 'dekd',  'name' => '🎓 Dek-D (TCAS / ทุน)', 'count' => $counts['dekd']),
        ),
        'items'      => $filtered
    ), 200);

    $response->header('Cache-Control', 'public, max-age=1800');
    return $response;
}

// REST Callback: National Education News
function spm_get_national_edu_news($request) {
    $source_filter = sanitize_text_field($request->get_param('source') ?? 'all');
    $force_refresh = $request->get_param('refresh') === '1' && current_user_can('manage_options');
    $cache_key = 'spm_national_edu_news_cache_v3';
    
    $cached_data = get_transient($cache_key);
    if ($cached_data && !$force_refresh && is_array($cached_data) && !empty($cached_data)) {
        return spm_format_edu_news_response($cached_data, $source_filter);
    }

    $all_items = array();

    // 1. สพฐ. (OBEC) RSS Feed
    $obec_resp = wp_remote_get('https://www.obec.go.th/feed/', array(
        'timeout'    => 4,
        'sslverify'  => false,
        'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
    ));
    if (!is_wp_error($obec_resp) && wp_remote_retrieve_response_code($obec_resp) === 200) {
        $body = trim(wp_remote_retrieve_body($obec_resp));
        $xml = @simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NOCDATA);
        if ($xml && isset($xml->channel->item)) {
            $count = 0;
            foreach ($xml->channel->item as $it) {
                if ($count >= 4) break;
                $title = (string) $it->title;
                $link = (string) $it->link;
                $pubDate = (string) $it->pubDate;
                $ts = !empty($pubDate) ? strtotime($pubDate) : time();
                $desc = wp_strip_all_tags((string) $it->description);
                $desc = mb_substr(trim($desc), 0, 130, 'UTF-8') . '...';
                $img = spm_extract_rss_image($it, 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&auto=format&fit=crop&q=60');

                $all_items[] = array(
                    'id'          => 'obec_' . md5($link),
                    'source_id'   => 'obec',
                    'source_name' => 'สพฐ. (OBEC)',
                    'badge'       => '🏛️ สพฐ.',
                    'badge_class' => 'badge-obec',
                    'title'       => $title,
                    'excerpt'     => $desc,
                    'link'        => $link,
                    'date'        => date_i18n('j M Y', $ts),
                    'timestamp'   => $ts,
                    'image'       => $img,
                    'accent_color'=> '#3B82F6'
                );
                $count++;
            }
        }
    }

    // 2. กระทรวงศึกษาธิการ (MOE) RSS Feed
    $moe_resp = wp_remote_get('https://www.moe.go.th/feed/', array(
        'timeout'    => 4,
        'sslverify'  => false,
        'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
    ));
    if (!is_wp_error($moe_resp) && wp_remote_retrieve_response_code($moe_resp) === 200) {
        $body = trim(wp_remote_retrieve_body($moe_resp));
        $xml = @simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NOCDATA);
        if ($xml && isset($xml->channel->item)) {
            $count = 0;
            foreach ($xml->channel->item as $it) {
                if ($count >= 4) break;
                $title = (string) $it->title;
                $link = (string) $it->link;
                $pubDate = (string) $it->pubDate;
                $ts = !empty($pubDate) ? strtotime($pubDate) : time() - 3600;
                $desc = wp_strip_all_tags((string) $it->description);
                $desc = mb_substr(trim($desc), 0, 130, 'UTF-8') . '...';
                $img = spm_extract_rss_image($it, 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=600&auto=format&fit=crop&q=60');

                $all_items[] = array(
                    'id'          => 'moe_' . md5($link),
                    'source_id'   => 'moe',
                    'source_name' => 'กระทรวงศึกษาธิการ (ศธ.)',
                    'badge'       => '🏫 ศธ.',
                    'badge_class' => 'badge-moe',
                    'title'       => $title,
                    'excerpt'     => $desc,
                    'link'        => $link,
                    'date'        => date_i18n('j M Y', $ts),
                    'timestamp'   => $ts,
                    'image'       => $img,
                    'accent_color'=> '#10B981'
                );
                $count++;
            }
        }
    }

    // 3.1 สำนักงาน ก.ค.ศ. (OTEPC) Live Official RSS Feed
    $otepc_resp = wp_remote_get('https://otepc.go.th/announcement/informations-news-all.feed?type=rss', array(
        'timeout'    => 5,
        'sslverify'  => false,
        'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
    ));
    if (!is_wp_error($otepc_resp) && wp_remote_retrieve_response_code($otepc_resp) === 200) {
        $body = trim(wp_remote_retrieve_body($otepc_resp));
        $xml = @simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NOCDATA);
        if ($xml && isset($xml->channel->item)) {
            $count = 0;
            foreach ($xml->channel->item as $it) {
                if ($count >= 3) break;
                $title = (string) $it->title;
                $link = (string) $it->link;
                $pubDate = (string) $it->pubDate;
                $ts = !empty($pubDate) ? strtotime($pubDate) : time() - 3600;
                $desc = wp_strip_all_tags((string) $it->description);
                $desc = mb_substr(trim($desc), 0, 130, 'UTF-8');
                if (empty($desc)) {
                    $desc = 'ประกาศ ระเบียบ และหลักเกณฑ์ทางการจากสำนักงานคณะกรรมการข้าราชการครูและบุคลากรทางการศึกษา (ก.ค.ศ.)';
                } else {
                    $desc .= '...';
                }
                $img = spm_extract_rss_image($it, 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&auto=format&fit=crop&q=60');

                $all_items[] = array(
                    'id'          => 'otepc_' . md5($link),
                    'source_id'   => 'otepc',
                    'source_name' => 'สำนักงาน ก.ค.ศ.',
                    'badge'       => '👔 ก.ค.ศ.',
                    'badge_class' => 'badge-otepc',
                    'title'       => $title,
                    'excerpt'     => $desc,
                    'link'        => $link,
                    'date'        => date_i18n('j M Y', $ts),
                    'timestamp'   => $ts,
                    'image'       => $img,
                    'accent_color'=> '#ECC86A'
                );
                $count++;
            }
        }
    }

    // 3.2 สำนักงานเลขาธิการคุรุสภา (KSP) RSS Feed
    $ksp_resp = wp_remote_get('https://www.ksp.or.th/feed/', array(
        'timeout'    => 4,
        'sslverify'  => false,
        'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
    ));
    if (!is_wp_error($ksp_resp) && wp_remote_retrieve_response_code($ksp_resp) === 200) {
        $body = trim(wp_remote_retrieve_body($ksp_resp));
        $xml = @simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NOCDATA);
        if ($xml && isset($xml->channel->item)) {
            $count = 0;
            foreach ($xml->channel->item as $it) {
                if ($count >= 2) break;
                $title = (string) $it->title;
                $link = (string) $it->link;
                $pubDate = (string) $it->pubDate;
                $ts = !empty($pubDate) ? strtotime($pubDate) : time() - 7200;
                $desc = wp_strip_all_tags((string) $it->description);
                $desc = mb_substr(trim($desc), 0, 130, 'UTF-8') . '...';
                $img = spm_extract_rss_image($it, 'https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&auto=format&fit=crop&q=60');

                $all_items[] = array(
                    'id'          => 'ksp_' . md5($link),
                    'source_id'   => 'otepc',
                    'source_name' => 'คุรุสภา & ก.ค.ศ.',
                    'badge'       => '🎖️ คุรุสภา',
                    'badge_class' => 'badge-otepc',
                    'title'       => $title,
                    'excerpt'     => $desc,
                    'link'        => $link,
                    'date'        => date_i18n('j M Y', $ts),
                    'timestamp'   => $ts,
                    'image'       => $img,
                    'accent_color'=> '#8B5CF6'
                );
                $count++;
            }
        }
    }

    // Curated ก.ค.ศ. Essential Direct Announcements (ว.PA, DPA, เกณฑ์วิทยฐานะ)
    $curated_otepc = array(
        array(
            'id'          => 'otepc_wpa_direct_587',
            'source_id'   => 'otepc',
            'source_name' => 'สำนักงาน ก.ค.ศ.',
            'badge'       => '👔 ก.ค.ศ. (ว.PA)',
            'badge_class' => 'badge-otepc',
            'title'       => 'ว 587/2569 ซักซ้อมเกี่ยวกับการนำคุณวุฒิระดับปริญญามาลดระยะเวลาในการขอมีวิทยฐานะหรือเลื่อนวิทยฐานะ (ว.PA)',
            'excerpt'     => 'หนังสือราชการ ก.ค.ศ. ซักซ้อมความเข้าใจการนับระยะเวลาการดำรงตำแหน่ง การลดระยะเวลาตามเงื่อนไขคุณวุฒิปริญญาโท-เอก ในระบบ DPA',
            'link'        => 'https://otepc.go.th/th/content_page/item/6043-587-2569.html',
            'date'        => date_i18n('j M Y'),
            'timestamp'   => time() - 3600 * 6,
            'image'       => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&auto=format&fit=crop&q=60',
            'accent_color'=> '#ECC86A'
        ),
        array(
            'id'          => 'otepc_board_meeting_direct',
            'source_id'   => 'otepc',
            'source_name' => 'สำนักงาน ก.ค.ศ.',
            'badge'       => '👔 ก.ค.ศ. (มติบอร์ด)',
            'badge_class' => 'badge-otepc',
            'title'       => 'สรุปผลการประชุมคณะกรรมการข้าราชการครูและบุคลากรทางการศึกษา (ก.ค.ศ.) วาระการบริหารงานบุคคลและวิทยฐานะ',
            'excerpt'     => 'มติที่ประชุม ก.ค.ศ. พิจารณาการปรับปรุงหลักเกณฑ์การย้าย การบริหารอัตรากำลังครู และการขับเคลื่อนนโยบายกระทรวงศึกษาธิการ',
            'link'        => 'https://otepc.go.th/th/content_page/item/6040-9-2569.html',
            'date'        => date_i18n('j M Y'),
            'timestamp'   => time() - 3600 * 14,
            'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&auto=format&fit=crop&q=60',
            'accent_color'=> '#ECC86A'
        )
    );
    foreach ($curated_otepc as $cot) {
        $all_items[] = $cot;
    }

    // 4. Dek-D (TCAS, ทุนการศึกษา, แนะนำการเรียน)
    $curated_dekd = array(
        array(
            'id'          => 'dekd_tcas_blueprint',
            'source_id'   => 'dekd',
            'source_name' => 'Dek-D Education (TCAS)',
            'badge'       => '🎓 Dek-D (TCAS)',
            'badge_class' => 'badge-dekd',
            'title'       => 'เปิดปฏิทิน TCAS ครบทั้ง 4 รอบ Portfolio, Quota, Admission และ Direct Admission เตรียมตัวก่อนใคร!',
            'excerpt'     => 'เจาะลึกกำหนดการรับสมัคร ยืนยันสิทธิ์ สละสิทธิ์ myTCAS และปฏิทินสอบ TGAT/TPAT และ A-Level ทุกกลุ่มสาระวิชา',
            'link'        => 'https://www.dek-d.com/tcas/',
            'date'        => date_i18n('j M Y'),
            'timestamp'   => time() - 3600 * 3,
            'image'       => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&auto=format&fit=crop&q=60',
            'accent_color'=> '#F97316'
        ),
        array(
            'id'          => 'dekd_scholarship_abroad',
            'source_id'   => 'dekd',
            'source_name' => 'Dek-D Study Abroad',
            'badge'       => '🎓 Dek-D (ทุนการศึกษา)',
            'badge_class' => 'badge-dekd',
            'title'       => 'รวมทุนการศึกษานานาชาติและทุนเต็มจำนวนระดับปริญญาตรี ประจำปีการศึกษา สำหรับนักเรียนมัธยมศึกษาตอนปลาย',
            'excerpt'     => 'ทุนรัฐบาลญี่ปุ่น MEXT, ทุนรัฐบาลเกาหลี GKS, ทุนรัฐบาลจีน CSC และทุนมหาวิทยาลัยชั้นนำ ไม่ต้องชดใช้เงินคืน',
            'link'        => 'https://www.dek-d.com/studyabroad/',
            'date'        => date_i18n('j M Y'),
            'timestamp'   => time() - 3600 * 9,
            'image'       => 'https://images.unsplash.com/photo-1544717305-2782549b5136?w=600&auto=format&fit=crop&q=60',
            'accent_color'=> '#F97316'
        ),
        array(
            'id'          => 'dekd_portfolio_blueprint',
            'source_id'   => 'dekd',
            'source_name' => 'Dek-D Admission',
            'badge'       => '🎓 Dek-D (TCAS)',
            'badge_class' => 'badge-dekd',
            'title'       => 'คู่มือสร้างแฟ้มสะสมผลงาน (Portfolio 10 หน้า) ให้โดนใจคณะกรรมการสัมภาษณ์ พร้อมแจกเทมเพลตมาตรฐานฟรี',
            'excerpt'     => 'แนะแนวทางจัดเรียงผลงาน กิจกรรมจิตอาสา เกียรติบัตร และการเขียน Statement of Purpose (SOP) เข้าคณะในฝัน',
            'link'        => 'https://www.dek-d.com/tcas/',
            'date'        => date_i18n('j M Y'),
            'timestamp'   => time() - 3600 * 22,
            'image'       => 'https://images.unsplash.com/photo-1513258496099-48168024aec0?w=600&auto=format&fit=crop&q=60',
            'accent_color'=> '#F97316'
        ),
        array(
            'id'          => 'dekd_tgat_tips',
            'source_id'   => 'dekd',
            'source_name' => 'Dek-D Exam Prep',
            'badge'       => '🎓 Dek-D (TCAS)',
            'badge_class' => 'badge-dekd',
            'title'       => 'เทคนิคพิชิตคะแนน TGAT การสื่อสารภาษาอังกฤษและการคิดอย่างมีเหตุผล สรุปจุดที่มักออกสอบบ่อยที่สุด',
            'excerpt'     => 'วิเคราะห์โครงสร้าง Test Blueprint ทริคลดเวลาทำข้อสอบ Speed Test และข้อควรระวังสำคัญในห้องสอบจริง',
            'link'        => 'https://www.dek-d.com/tcas/',
            'date'        => date_i18n('j M Y'),
            'timestamp'   => time() - 3600 * 32,
            'image'       => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&auto=format&fit=crop&q=60',
            'accent_color'=> '#F97316'
        )
    );
    foreach ($curated_dekd as $cd) {
        $all_items[] = $cd;
    }

    // Sort items by timestamp DESC
    usort($all_items, function($a, $b) {
        return ($b['timestamp'] ?? 0) <=> ($a['timestamp'] ?? 0);
    });

    // Cache in WordPress transient for 1 hour (3600 seconds)
    set_transient($cache_key, $all_items, 3600);

    return spm_format_edu_news_response($all_items, $source_filter);
}

// 4. Render Admin Settings Page (Ultra-Detailed Tabbed SaaS Control Center)
function spm_render_admin_page() {
    if (!current_user_can('manage_options')) return;

    $notice = '';
    if (isset($_POST['spm_save_settings']) && check_admin_referer('spm_save_action', 'spm_nonce')) {
        $allowed = array_keys(spm_get_default_settings());
        $new_settings = array();
        foreach ($allowed as $k) {
            if (in_array($k, array('school_vision', 'director_message', 'ai_welcome_text', 'hero_desc', 'faq1_a', 'faq2_a', 'faq3_a'))) {
                $new_settings[$k] = isset($_POST[$k]) ? sanitize_textarea_field(wp_unslash($_POST[$k])) : '';
            } else {
                $new_settings[$k] = isset($_POST[$k]) ? sanitize_text_field(wp_unslash($_POST[$k])) : '';
            }
        }
        $new_settings['notice_enabled'] = isset($_POST['notice_enabled']) ? '1' : '0';
        update_option('spm_portal_settings', $new_settings);
        $notice = '<div style="background: #ECFDF5; border: 1px solid #10B981; border-left: 6px solid #10B981; border-radius: 12px; padding: 16px 22px; margin: 15px 0 25px 0; color: #065F46; font-size: 14.5px; font-weight: 700; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 10px 25px rgba(16,185,129,0.15);">
            <div style="display: flex; align-items: center; gap: 12px;">
                <span style="font-size: 26px;">✨</span>
                <div>
                    <div style="font-size: 15px;">บันทึกข้อมูลเรียบร้อยสมบูรณ์แล้ว!</div>
                    <div style="font-size: 12.5px; font-weight: 500; color: #047857; margin-top: 2px;">ข้อมูลทุกส่วนบนหน้าเว็บหลักและหน้ารองอัปเดตแบบเรียลไทม์ทันที ไม่ต้องล้างแคช</div>
                </div>
            </div>
            <a href="' . esc_url(home_url('/')) . '" target="_blank" style="background: #10B981; color: #FFFFFF; padding: 9px 18px; border-radius: 8px; text-decoration: none; font-size: 13px; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
                <span>ดูหน้าเว็บจริง</span> ↗
            </a>
        </div>';
    }

    $s = spm_get_settings();
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=K2D:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <div class="wrap sps-admin-root" style="max-width: 1100px; font-family: 'Google Sans', 'K2D', sans-serif !important; padding-bottom: 100px;">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=K2D:wght@300;400;500;600;700;800&display=swap');

            /* Force Google Sans & K2D across every element in SPS Admin Panel */
            .sps-admin-root,
            .sps-admin-root *,
            .spm-admin-wrap,
            .spm-admin-wrap *,
            .spm-sidebar,
            .spm-sidebar *,
            .spm-tab-btn,
            .spm-tab-btn *,
            .spm-content-pane,
            .spm-content-pane *,
            .spm-card,
            .spm-card *,
            .spm-card-head,
            .spm-label,
            .sps-hint,
            .spm-input,
            .spm-sticky-bar,
            .spm-sticky-bar *,
            #wpbody-content .wrap.sps-admin-root,
            #wpbody-content .wrap.sps-admin-root h1,
            #wpbody-content .wrap.sps-admin-root h2,
            #wpbody-content .wrap.sps-admin-root h3,
            #wpbody-content .wrap.sps-admin-root h4,
            #wpbody-content .wrap.sps-admin-root p,
            #wpbody-content .wrap.sps-admin-root span,
            #wpbody-content .wrap.sps-admin-root a,
            #wpbody-content .wrap.sps-admin-root input,
            #wpbody-content .wrap.sps-admin-root textarea,
            #wpbody-content .wrap.sps-admin-root button,
            #wpbody-content .wrap.sps-admin-root select {
                font-family: 'Google Sans', 'K2D', sans-serif !important;
            }

            .spm-admin-wrap { display: flex; gap: 24px; align-items: flex-start; margin-top: 20px; }
            .spm-sidebar { width: 260px; flex-shrink: 0; background: #FFFFFF; border-radius: 16px; border: 1px solid #E2E8F0; padding: 12px; box-shadow: 0 4px 16px rgba(15,23,42,0.04); position: sticky; top: 40px; }
            .spm-tab-btn { width: 100%; text-align: left; padding: 11px 14px; border-radius: 10px; border: none; background: transparent; color: #475569; font-size: 13.5px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 10px; transition: all 0.15s; margin-bottom: 4px; }
            .spm-tab-btn:hover { background: #F1F5F9; color: #060B19; }
            .spm-tab-btn.active { background: linear-gradient(135deg, #060B19 0%, #0B132B 100%); color: #FFFFFF; font-weight: 700; border-left: 4px solid #ECC86A; box-shadow: 0 4px 14px rgba(6,11,25,0.35); }
            .spm-tab-btn.active .spm-tab-icon { color: #ECC86A; font-weight: 800; }
            .spm-tab-btn.active span { color: #FFFFFF; }
            .spm-content-pane { flex-grow: 1; min-width: 0; }
            .spm-tab-section { display: none; }
            .spm-tab-section.active { display: block; animation: spsFade 0.25s ease-out; }
            @keyframes spsFade { from { opacity: 0; transform: translateY(6px); } to { opacity: 1; transform: translateY(0); } }
            
            .spm-card { background: #FFFFFF; border-radius: 16px; padding: 26px 30px; margin-bottom: 22px; border: 1px solid #E2E8F0; box-shadow: 0 4px 16px rgba(15,23,42,0.04); }
            .spm-card-head { margin: 0 0 18px 0; font-size: 17.5px; color: #0F172A; font-weight: 700; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #F1F5F9; padding-bottom: 14px; }
            .spm-label { display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px; }
            .sps-hint { font-size: 11.5px; color: #64748B; margin-top: 4px; line-height: 1.4; }
            .spm-input { width: 100%; padding: 11px 14px; border: 1.5px solid #CBD5E1; border-radius: 10px; font-size: 14px; transition: all 0.2s; outline: none; box-sizing: border-box; background: #FFFFFF; color: #0F172A; }
            .spm-input:focus { border-color: #ECC86A; box-shadow: 0 0 0 3px rgba(236,200,106,0.25); outline: none; }
            .sps-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
            .sps-grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; margin-bottom: 16px; }
            .sps-grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-bottom: 16px; }
            .spm-sticky-bar { position: fixed; bottom: 0; left: 160px; right: 0; background: rgba(6,11,25,0.96); backdrop-filter: blur(14px); border-top: 1px solid rgba(236,200,106,0.35); -webkit-backdrop-filter: blur(14px); padding: 14px 32px; display: flex; align-items: center; justify-content: space-between; z-index: 9999; border-top: 1px solid rgba(255,255,255,0.12); box-shadow: 0 -10px 30px rgba(0,0,0,0.25); }
            
            @media (max-width: 960px) {
                .spm-admin-wrap { flex-direction: column; }
                .spm-sidebar { width: 100%; position: static; display: flex; flex-wrap: wrap; gap: 6px; }
                .spm-tab-btn { width: auto; }
                .spm-sticky-bar { left: 0; padding: 12px 18px; }
            }
            @media (max-width: 782px) {
                .sps-grid-2, .sps-grid-3, .sps-grid-4 { grid-template-columns: 1fr !important; }
            }
        </style>

        <!-- Top Header Banner (Executive Sakon Kram & Royal Gold) -->
        <div style="background: linear-gradient(135deg, #060B19 0%, #0B132B 50%, #1E293B 100%); padding: 32px 36px; border-radius: 20px; margin: 20px 0 22px 0; box-shadow: 0 16px 36px rgba(6,11,25,0.3); display: flex; align-items: center; justify-content: space-between; border: 1px solid rgba(236,200,106,0.35); flex-wrap: wrap; gap: 20px; position: relative; overflow: hidden;">
            <div style="position: absolute; right: -30px; bottom: -30px; font-size: 150px; color: rgba(236,200,106,0.03); pointer-events: none; font-weight: 900;">สพม.</div>
            <div style="position: relative; z-index: 1;">
                <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(236,200,106,0.15); border: 1px solid rgba(236,200,106,0.4); padding: 6px 16px; border-radius: 999px; margin-bottom: 12px; box-shadow: 0 4px 15px rgba(236,200,106,0.15);">
                    <span style="font-size: 13.5px; font-weight: 800; color: #ECC86A; letter-spacing: 0.5px;">⭐ SPM SAKON NAKHON DIGITAL COMMAND CENTER</span>
                </div>
                <h1 style="color: #FFFFFF; font-size: 26px; font-weight: 800; margin: 0 0 8px 0; display: flex; align-items: center; gap: 12px;">
                    🏛️ ศูนย์บัญชาการดิจิทัล สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร
                </h1>
                <p style="color: #CBD5E1; margin: 0; font-size: 14px; line-height: 1.6; max-width: 720px;">
                    ระบบบริหารจัดการและเผยแพร่ข้อมูลกลางระดับเขตพื้นที่การศึกษา ครอบคลุม 14 หมวดหมู่ 150+ รายการสำคัญ ปรับปรุงข้อมูลสดใหม่แบบเรียลไทม์เพื่อ 43 โรงเรียนและบริการประชาชน
                </p>
            </div>
            <div style="display: flex; gap: 12px; flex-wrap: wrap; position: relative; z-index: 1;">
                <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(236,200,106,0.4); color: #ECC86A; padding: 11px 20px; border-radius: 10px; text-decoration: none; font-size: 13.5px; font-weight: 700; display: inline-flex; align-items: center; gap: 8px; transition: all 0.2s;">
                    👁️ ดูหน้าเว็บจริง ↗
                </a>
                <a href="<?php echo esc_url(admin_url('post-new.php')); ?>" style="background: linear-gradient(135deg, #ECC86A 0%, #D4AF37 100%); color: #060B19; padding: 11px 22px; border-radius: 10px; text-decoration: none; font-size: 13.5px; font-weight: 800; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 18px rgba(212,175,55,0.4);">
                    ✍️ เขียนข่าวสาร สพม.
                </a>
            </div>
        </div>

        <!-- Executive District Key Metrics Bar -->
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-bottom: 25px;">
            <div style="background: linear-gradient(135deg, #060B19 0%, #0B132B 100%); border: 1px solid rgba(236,200,106,0.3); border-radius: 16px; padding: 16px 20px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 15px rgba(6,11,25,0.15);">
                <div style="font-size: 32px; background: rgba(236,200,106,0.12); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(236,200,106,0.3);">🏛️</div>
                <div>
                    <div style="font-size: 20px; font-weight: 800; color: #ECC86A;">43 โรงเรียน</div>
                    <div style="font-size: 12px; color: #94A3B8; font-weight: 600;">6 สหวิทยาเขตในสังกัด</div>
                </div>
            </div>
            <div style="background: linear-gradient(135deg, #060B19 0%, #0B132B 100%); border: 1px solid rgba(236,200,106,0.3); border-radius: 16px; padding: 16px 20px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 15px rgba(6,11,25,0.15);">
                <div style="font-size: 32px; background: rgba(236,200,106,0.12); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(236,200,106,0.3);">👥</div>
                <div>
                    <div style="font-size: 20px; font-weight: 800; color: #ECC86A;">2,450+ ท่าน</div>
                    <div style="font-size: 12px; color: #94A3B8; font-weight: 600;">ข้าราชการครู & บุคลากร</div>
                </div>
            </div>
            <div style="background: linear-gradient(135deg, #060B19 0%, #0B132B 100%); border: 1px solid rgba(236,200,106,0.3); border-radius: 16px; padding: 16px 20px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 15px rgba(6,11,25,0.15);">
                <div style="font-size: 32px; background: rgba(236,200,106,0.12); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(236,200,106,0.3);">🎓</div>
                <div>
                    <div style="font-size: 20px; font-weight: 800; color: #ECC86A;">38,500+ คน</div>
                    <div style="font-size: 12px; color: #94A3B8; font-weight: 600;">นักเรียนครอบคลุม 18 อำเภอ</div>
                </div>
            </div>
            <div style="background: linear-gradient(135deg, #060B19 0%, #0B132B 100%); border: 1px solid rgba(236,200,106,0.3); border-radius: 16px; padding: 16px 20px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 15px rgba(6,11,25,0.15);">
                <div style="font-size: 32px; background: rgba(236,200,106,0.12); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(236,200,106,0.3);">⭐</div>
                <div>
                    <div style="font-size: 20px; font-weight: 800; color: #ECC86A;">ITA ระดับ AA</div>
                    <div style="font-size: 12px; color: #94A3B8; font-weight: 600;">98.50 คะแนนความโปร่งใส</div>
                </div>
            </div>
        </div>

        <?php echo $notice; ?>

        <form method="post" action="">
            <?php wp_nonce_field('spm_save_action', 'spm_nonce'); ?>

            <div class="spm-admin-wrap">
                <!-- Left Navigation Sidebar -->
                <div class="spm-sidebar">
                    <div style="font-size: 11.5px; font-weight: 700; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.8px; padding: 6px 12px 10px;">
                        หมวดหมู่การตั้งค่า (14 หมวด)
                    </div>
                    <button type="button" class="spm-tab-btn active" onclick="switchAdminTab('tab-notice', this)">
                        <span class="spm-tab-icon">📢</span> 1. ประกาศด่วน & หัวเว็บ
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-hero', this)">
                        <span class="spm-tab-icon">🎯</span> 2. แบนเนอร์ & คำขวัญ
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-identity', this)">
                        <span class="spm-tab-icon">🏛️</span> 3. อัตลักษณ์ & ค่านิยมองค์กร
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-exec', this)">
                        <span class="spm-tab-icon">👔</span> 4. คณะผู้บริหาร สพม.สกลนคร
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-services', this)">
                        <span class="spm-tab-icon">⚡</span> 5. บริการดิจิทัล 8 เสาหลัก
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-green', this)">
                        <span class="spm-tab-icon">🌿</span> 6. สิ่งแวดล้อม Solar Rooftop
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-analytics', this)">
                        <span class="spm-tab-icon">📊</span> 7. ข้อมูลสารสนเทศ บิ๊กดาต้า & สถิติการศึกษา
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-timeline', this)">
                        <span class="spm-tab-icon">📅</span> 8. ปฏิทินปฏิบัติงาน & กิจกรรม
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-faq', this)">
                        <span class="spm-tab-icon">❓</span> 9. คำถามที่พบบ่อย (FAQ)
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-ita', this)">
                        <span class="spm-tab-icon">⚖️</span> 10. ความโปร่งใส & ITA
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-contact', this)">
                        <span class="spm-tab-icon">📞</span> 11. ติดต่อ โซเชียล & ท้ายเว็บ
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-ai', this)">
                        <span class="spm-tab-icon">🤖</span> 12. ผู้ช่วย AI น้องภูพาน AI
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-theme', this)">
                        <span class="spm-tab-icon">🎨</span> 13. ธีมสี & เอกลักษณ์โรงเรียน
                    </button>
                    <button type="button" class="spm-tab-btn" onclick="switchAdminTab('tab-blueprint', this)">
                        <span class="spm-tab-icon">🏛️</span> 14. พิมพ์เขียวโรงเรียน (Blueprint Hub)
                    </button>
                </div>

                <!-- Right Content Pane -->
                <div class="spm-content-pane">
                    
                    <!-- TAB 1: ประกาศด่วน & หัวเว็บ -->
                    <div id="tab-notice" class="spm-tab-section active">
                        <div class="spm-card" style="border-left: 5px solid #1E40AF;">
                            <div class="spm-card-head">
                                <span>📢 แถบประกาศด่วนบนสุดของเว็บไซต์ (Emergency Notice & Alert)</span>
                                <label style="display: inline-flex; align-items: center; gap: 8px; font-weight: 700; cursor: pointer; color: #0F172A; background: #FEE2E2; padding: 6px 14px; border-radius: 20px; font-size: 13px; border: 1px solid #FECACA;">
                                    <input type="checkbox" name="notice_enabled" value="1" <?php checked($s['notice_enabled'], '1'); ?> style="width: 17px; height: 17px; accent-color: #ECC86A;">
                                    เปิดแสดงแถบประกาศด่วน
                                </label>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ป้ายกำกับประกาศ (Badge Text):</label>
                                    <input type="text" name="notice_badge" value="<?php echo esc_attr($s['notice_badge'] ?? '📢 ประกาศด่วน'); ?>" class="spm-input">
                                    <div class="sps-hint">เช่น 📢 ประกาศด่วน, 📄 หนังสือราชการเร่งด่วน, 🏆 ข่าวผลงานรางวัล, 📝 ประชุมราชการ สพม.</div>
                                </div>
                                <div>
                                    <label class="spm-label">ลิงก์ปลายทางเมื่อคลิกประกาศ (URL):</label>
                                    <input type="url" name="notice_link" value="<?php echo esc_attr($s['notice_link']); ?>" class="spm-input">
                                </div>
                            </div>
                            <div>
                                <label class="spm-label">ข้อความประกาศด่วน (Notice Text):</label>
                                <input type="text" name="notice_text" value="<?php echo esc_attr($s['notice_text']); ?>" class="spm-input" style="font-weight: 600;">
                            </div>
                        </div>

                        <div class="spm-card">
                            <h3 class="spm-card-head">🏛️ ข้อมูลชื่อสำนักงานเขตและหน่วยงานต้นสังกัด (District Identity)</h3>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ชื่อหน่วยงาน (ภาษาไทย):</label>
                                    <input type="text" name="school_name_th" value="<?php echo esc_attr($s['school_name_th'] ?? 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร'); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                                <div>
                                    <label class="spm-label">ชื่อหน่วยงาน (ภาษาอังกฤษ):</label>
                                    <input type="text" name="school_name_en" value="<?php echo esc_attr($s['school_name_en'] ?? 'Sakonnakhonpatanasuksa School'); ?>" class="spm-input">
                                </div>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ชื่อย่อหน่วยงาน (Acronym เช่น สพม.สกลนคร):</label>
                                    <input type="text" name="school_name_short" value="<?php echo esc_attr($s['school_name_short'] ?? 'สพม.สกลนคร • SESAO Sakon Nakhon'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">หน่วยงานต้นสังกัด (Affiliation Tagline):</label>
                                    <input type="text" name="top_ticker_org" value="<?php echo esc_attr($s['top_ticker_org'] ?? 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 2: แบนเนอร์ & คำขวัญ -->
                    <div id="tab-hero" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #ECC86A;">
                            <h3 class="spm-card-head">🎯 แบนเนอร์หลักหน้าแรก (Hero Banner Showcase)</h3>
                            <div style="margin-bottom: 16px;">
                                <label class="spm-label">ป้ายกำกับหัวแบนเนอร์ (Top Tag Badge):</label>
                                <input type="text" name="hero_badge" value="<?php echo esc_attr($s['hero_badge'] ?? 'SMART SECONDARY EDUCATION PLATFORM'); ?>" class="spm-input">
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">หัวข้อแบนเนอร์ บรรทัดที่ 1:</label>
                                    <input type="text" name="hero_title_1" value="<?php echo esc_attr($s['hero_title_1'] ?? 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร'); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                                <div>
                                    <label class="spm-label">หัวข้อแบนเนอร์ บรรทัดที่ 2 (เน้นสีสัน):</label>
                                    <input type="text" name="hero_title_2" value="<?php echo esc_attr($s['hero_title_2'] ?? 'สร้างสรรค์คนดี มีปัญญา ก้าวทันโลกดิจิทัล'); ?>" class="spm-input" style="font-weight: 700; color: #D4AF37;">
                                </div>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label class="spm-label">คำอธิบายใต้หัวข้อแบนเนอร์ (Hero Subtitle):</label>
                                <textarea name="hero_desc" rows="3" class="spm-input" style="line-height: 1.5;"><?php echo esc_textarea($s['hero_desc'] ?? 'มุ่งพัฒนาผู้เรียนระดับมัธยมศึกษาให้ใฝ่รู้ใฝ่เรียน มีระเบียบวินัย และมีสัมมาคารวะ ยกระดับผลสัมฤทธิ์ทางการเรียนด้วยนวัตกรรมและเทคโนโลยีสมัยใหม่ ภายใต้รั้วน้ำเงิน-ชมพู'); ?></textarea>
                            </div>
                            <div class="sps-grid-2">
                                <div style="background: #F8FAFC; padding: 14px; border-radius: 10px; border: 1px solid #E2E8F0;">
                                    <strong style="font-size: 13px; color: #0F172A; display: block; margin-bottom: 8px;">🔘 ปุ่มกดที่ 1 (ปุ่มเด่น):</strong>
                                    <input type="text" name="hero_btn1_text" value="<?php echo esc_attr($s['hero_btn1_text'] ?? 'ระบบตรวจสอบผลการเรียน'); ?>" placeholder="ข้อความปุ่ม" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="text" name="hero_btn1_link" value="<?php echo esc_attr($s['hero_btn1_link'] ?? '#services'); ?>" placeholder="ลิงก์ปลายทาง" class="spm-input">
                                </div>
                                <div style="background: #F8FAFC; padding: 14px; border-radius: 10px; border: 1px solid #E2E8F0;">
                                    <strong style="font-size: 13px; color: #0F172A; display: block; margin-bottom: 8px;">🔘 ปุ่มกดที่ 2 (ปุ่มกระจก):</strong>
                                    <input type="text" name="hero_btn2_text" value="<?php echo esc_attr($s['hero_btn2_text'] ?? 'แผนการเรียน ม.ต้น - ม.ปลาย'); ?>" placeholder="ข้อความปุ่ม" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="text" name="hero_btn2_link" value="<?php echo esc_attr($s['hero_btn2_link'] ?? '/site/curriculum/'); ?>" placeholder="ลิงก์ปลายทาง" class="spm-input">
                                </div>
                            </div>
                        </div>

                        <div class="spm-card">
                            <h3 class="spm-card-head">✨ ชิปไฮไลต์ 4 รายการใต้แบนเนอร์ (Hero Key Chips)</h3>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ชิปที่ 1:</label>
                                    <input type="text" name="hero_chip1" value="<?php echo esc_attr($s['hero_chip1'] ?? 'ใฝ่รู้ใฝ่เรียน'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">ชิปที่ 2:</label>
                                    <input type="text" name="hero_chip2" value="<?php echo esc_attr($s['hero_chip2'] ?? 'มีระเบียบวินัย'); ?>" class="spm-input">
                                </div>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ชิปที่ 3:</label>
                                    <input type="text" name="hero_chip3" value="<?php echo esc_attr($s['hero_chip3'] ?? 'มีสัมมาคารวะ'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">ชิปที่ 4 (พิกัดสั้น):</label>
                                    <input type="text" name="hero_chip4" value="<?php echo esc_attr($s['hero_chip4'] ?? '271 ถ.ไอทียู ต.งิ้วด่อน อ.เมืองสกลนคร'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 3: อัตลักษณ์ & ปรัชญา -->
                    <div id="tab-identity" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #8B5CF6;">
                            <h3 class="spm-card-head">🏛️ อัตลักษณ์ วิสัยทัศน์ และค่านิยม สพม.สกลนคร</h3>
                            <div style="margin-bottom: 16px;">
                                <label class="spm-label">คำขวัญประจำ สพม.สกลนคร (District Motto):</label>
                                <input type="text" name="school_motto" value="<?php echo esc_attr($s['school_motto']); ?>" class="spm-input">
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label class="spm-label">ค่านิยมองค์กร (Core Values - SPM SAKON):</label>
                                <input type="text" name="school_philosophy" value="<?php echo esc_attr($s['school_philosophy']); ?>" class="spm-input" style="font-weight: 700;">
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label class="spm-label">วิสัยทัศน์ สพม.สกลนคร (Vision):</label>
                                <textarea name="school_vision" rows="2" class="spm-input" style="line-height: 1.5;"><?php echo esc_textarea($s['school_vision']); ?></textarea>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">เอกลักษณ์ สพม.สกลนคร (Identity):</label>
                                    <input type="text" name="school_identity" value="<?php echo esc_attr($s['school_identity'] ?? 'สิ่งแวดล้อมดี มีเทคโนโลยี ก้าวสู่วิถีคุณภาพ'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">อัตลักษณ์องค์กร สพม.สกลนคร (Organizational Identity):</label>
                                    <input type="text" name="school_uniqueness" value="<?php echo esc_attr($s['school_uniqueness'] ?? 'ยิ้มง่าย ไหว้สวย รวยน้ำใจ ใฝ่เรียนรู้'); ?>" class="spm-input">
                                </div>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">สีประจำเขตพื้นที่ (District Colors: น้ำเงินคราม - เหลืองทอง):</label>
                                    <input type="text" name="school_colors" value="<?php echo esc_attr($s['school_colors'] ?? 'น้ำเงิน - ชมพู'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">ต้นไม้ / ดอกไม้ประจำจังหวัดและเขตพื้นที่:</label>
                                    <input type="text" name="school_tree" value="<?php echo esc_attr($s['school_tree'] ?? 'ต้นราชพฤกษ์ (ดอกคูน)'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 4: คณะผู้บริหาร สพม.สกลนคร -->
                    <div id="tab-exec" class="spm-tab-section">
                        <!-- ผู้อำนวยการ สพม.สกลนคร -->
                        <div class="spm-card" style="border-left: 5px solid #D4AF37;">
                            <h3 class="spm-card-head">👔 ข้อมูลและรูปถ่าย ผู้อำนวยการ สพม.สกลนคร (ผอ.เขต)</h3>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ชื่อ-นามสกุล ผู้อำนวยการ:</label>
                                    <input type="text" name="director_name" value="<?php echo esc_attr($s['director_name'] ?? 'นายนรงณ์ เห็นหลอด'); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                                <div>
                                    <label class="spm-label">ตำแหน่ง / วิทยฐานะ:</label>
                                    <input type="text" name="director_title" value="<?php echo esc_attr($s['director_title'] ?? 'ผู้อำนวยการสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร'); ?>" class="spm-input">
                                </div>
                            </div>
                            
                            <div style="margin: 16px 0; background: #F8FAFC; border: 1px solid #E2E8F0; padding: 16px; border-radius: 12px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                                <div style="text-align: center;">
                                    <img id="preview_director_image" src="<?php echo esc_url($s['director_image'] ?? 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/director.jpg'); ?>" style="width: 76px; height: 76px; border-radius: 50%; object-fit: cover; object-position: center top; border: 3px solid #D4AF37; box-shadow: 0 4px 12px rgba(0,0,0,0.15); display: block; margin: 0 auto 6px auto;">
                                    <span style="font-size: 11px; color: #64748B; font-weight: 600;">รูปปัจจุบัน</span>
                                </div>
                                <div style="flex: 1; min-width: 260px;">
                                    <label class="spm-label">URL รูปถ่ายผู้อำนวยการ (Director Portrait URL):</label>
                                    <div style="display: flex; gap: 8px;">
                                        <input type="text" id="director_image" name="director_image" value="<?php echo esc_attr($s['director_image'] ?? ''); ?>" placeholder="https://..." class="spm-input" style="flex: 1;">
                                        <button type="button" class="button spm-upload-media-btn" data-target="director_image" data-preview="preview_director_image" style="background: #0B132B; color: #ECC86A; border: 1px solid #D4AF37; font-weight: 700; white-space: nowrap; padding: 6px 14px; border-radius: 6px; cursor: pointer;">
                                            📷 เลือกรูปจากคลังสื่อ
                                        </button>
                                    </div>
                                    <div class="sps-hint">สามารถกดปุ่มเพื่อเลือกหรืออัปโหลดรูปภาพจาก WordPress Media Library หรือพิมพ์ URL โดยตรงได้ทันที</div>
                                </div>
                            </div>

                            <div>
                                <label class="spm-label">สาส์นจากผู้อำนวยการ (Welcome Message / Quote):</label>
                                <textarea name="director_message" rows="3" class="spm-input" style="line-height: 1.5;"><?php echo esc_textarea($s['director_message'] ?? ''); ?></textarea>
                            </div>
                        </div>

                        <!-- รองผู้อำนวยการทั้ง 3 ท่าน -->
                        <div class="spm-card" style="border-left: 5px solid #0EA5E9;">
                            <h3 class="spm-card-head">👥 คณะรองผู้อำนวยการ สพม.สกลนคร (3 ท่านตามสายงาน)</h3>
                            
                            <!-- รอง ผอ. คนที่ 1 -->
                            <div style="background: #F8FAFC; border: 1px solid #E2E8F0; padding: 18px; border-radius: 12px; margin-bottom: 20px;">
                                <div style="font-weight: 800; color: #0284C7; font-size: 15px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                    <span>🥇 1. รองผู้อำนวยการ สพม.สกลนคร (คนที่ 1)</span>
                                </div>
                                <div class="sps-grid-2">
                                    <div>
                                        <label class="spm-label">ชื่อ-นามสกุล:</label>
                                        <input type="text" name="deputy1_name" value="<?php echo esc_attr($s['deputy1_name'] ?? $s['deputy_academic'] ?? 'นายชลาวุธ สามาอาพัฒน์'); ?>" class="spm-input" style="font-weight: 700;">
                                    </div>
                                    <div>
                                        <label class="spm-label">ตำแหน่งทางการ:</label>
                                        <input type="text" name="deputy1_title" value="<?php echo esc_attr($s['deputy1_title'] ?? 'รองผู้อำนวยการ สพม.สกลนคร (คนที่ 1)'); ?>" class="spm-input">
                                    </div>
                                </div>
                                <div style="margin: 12px 0; display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                                    <img id="preview_deputy1_image" src="<?php echo esc_url($s['deputy1_image'] ?? 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy1.jpg'); ?>" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; object-position: center top; border: 2px solid #0EA5E9; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                                    <div style="flex: 1; min-width: 250px;">
                                        <label class="spm-label">URL รูปถ่าย รอง ผอ.คนที่ 1:</label>
                                        <div style="display: flex; gap: 8px;">
                                            <input type="text" id="deputy1_image" name="deputy1_image" value="<?php echo esc_attr($s['deputy1_image'] ?? 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy1.jpg'); ?>" class="spm-input" style="flex: 1;">
                                            <button type="button" class="button spm-upload-media-btn" data-target="deputy1_image" data-preview="preview_deputy1_image" style="background: #0284C7; color: #FFF; border: none; font-weight: 700; padding: 6px 12px; border-radius: 6px; cursor: pointer;">
                                                📷 เลือกรูปภาพ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">ขอบข่ายภารกิจ / สหวิทยาเขตที่ดูแล:</label>
                                    <input type="text" name="deputy1_scope" value="<?php echo esc_attr($s['deputy1_scope'] ?? 'กำกับ: การเงินฯ, ส่งเสริมฯ, DLICT • ดูแล: เบญจรักษ์, พระธาตุนารายณ์ฯ, ลุ่มน้ำอูน'); ?>" class="spm-input">
                                </div>
                                <div style="margin-top: 10px;">
                                    <label class="spm-label">คำกล่าว / วิสัยทัศน์:</label>
                                    <input type="text" name="deputy1_quote" value="<?php echo esc_attr($s['deputy1_quote'] ?? 'ขับเคลื่อนการบริหารการเงินโปร่งใส ยกระดับการศึกษาทางไกลดิจิทัล และส่งเสริมโอกาสทางการเรียนรู้ของนักเรียนอย่างเท่าเทียม'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- รอง ผอ. คนที่ 2 -->
                            <div style="background: #F8FAFC; border: 1px solid #E2E8F0; padding: 18px; border-radius: 12px; margin-bottom: 20px;">
                                <div style="font-weight: 800; color: #0284C7; font-size: 15px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                    <span>🥈 2. รองผู้อำนวยการ สพม.สกลนคร (คนที่ 2)</span>
                                </div>
                                <div class="sps-grid-2">
                                    <div>
                                        <label class="spm-label">ชื่อ-นามสกุล:</label>
                                        <input type="text" name="deputy2_name" value="<?php echo esc_attr($s['deputy2_name'] ?? $s['deputy_budget'] ?? 'ดร.บุญธรรม อ้วนกันยา'); ?>" class="spm-input" style="font-weight: 700;">
                                    </div>
                                    <div>
                                        <label class="spm-label">ตำแหน่งทางการ:</label>
                                        <input type="text" name="deputy2_title" value="<?php echo esc_attr($s['deputy2_title'] ?? 'รองผู้อำนวยการ สพม.สกลนคร (คนที่ 2)'); ?>" class="spm-input">
                                    </div>
                                </div>
                                <div style="margin: 12px 0; display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                                    <img id="preview_deputy2_image" src="<?php echo esc_url($s['deputy2_image'] ?? 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy2.jpg'); ?>" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; object-position: center top; border: 2px solid #0EA5E9; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                                    <div style="flex: 1; min-width: 250px;">
                                        <label class="spm-label">URL รูปถ่าย รอง ผอ.คนที่ 2:</label>
                                        <div style="display: flex; gap: 8px;">
                                            <input type="text" id="deputy2_image" name="deputy2_image" value="<?php echo esc_attr($s['deputy2_image'] ?? 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy2.jpg'); ?>" class="spm-input" style="flex: 1;">
                                            <button type="button" class="button spm-upload-media-btn" data-target="deputy2_image" data-preview="preview_deputy2_image" style="background: #0284C7; color: #FFF; border: none; font-weight: 700; padding: 6px 12px; border-radius: 6px; cursor: pointer;">
                                                📷 เลือกรูปภาพ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">ขอบข่ายภารกิจ / สหวิทยาเขตที่ดูแล:</label>
                                    <input type="text" name="deputy2_scope" value="<?php echo esc_attr($s['deputy2_scope'] ?? 'กำกับ: อำนวยการ, บุคคล, พัฒนาครูฯ • ดูแล: สว่างศึกษา, เทพทวีพัฒน์'); ?>" class="spm-input">
                                </div>
                                <div style="margin-top: 10px;">
                                    <label class="spm-label">คำกล่าว / วิสัยทัศน์:</label>
                                    <input type="text" name="deputy2_quote" value="<?php echo esc_attr($s['deputy2_quote'] ?? 'บริหารงานบุคคลด้วยความถูกต้องเป็นธรรม พัฒนาสมรรถนะครูสู่ความเป็นเลิศ พร้อมเสริมสร้างขวัญกำลังใจและระบบ ว.PA'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- รอง ผอ. คนที่ 3 -->
                            <div style="background: #F8FAFC; border: 1px solid #E2E8F0; padding: 18px; border-radius: 12px;">
                                <div style="font-weight: 800; color: #0284C7; font-size: 15px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                    <span>🥉 3. รองผู้อำนวยการ สพม.สกลนคร (คนที่ 3)</span>
                                </div>
                                <div class="sps-grid-2">
                                    <div>
                                        <label class="spm-label">ชื่อ-นามสกุล:</label>
                                        <input type="text" name="deputy3_name" value="<?php echo esc_attr($s['deputy3_name'] ?? $s['deputy_personnel'] ?? 'นางสาววัชราภรณ์ ปัฏนา'); ?>" class="spm-input" style="font-weight: 700;">
                                    </div>
                                    <div>
                                        <label class="spm-label">ตำแหน่งทางการ:</label>
                                        <input type="text" name="deputy3_title" value="<?php echo esc_attr($s['deputy3_title'] ?? 'รองผู้อำนวยการ สพม.สกลนคร (คนที่ 3)'); ?>" class="spm-input">
                                    </div>
                                </div>
                                <div style="margin: 12px 0; display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                                    <img id="preview_deputy3_image" src="<?php echo esc_url($s['deputy3_image'] ?? 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy3.jpg'); ?>" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; object-position: center top; border: 2px solid #0EA5E9; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                                    <div style="flex: 1; min-width: 250px;">
                                        <label class="spm-label">URL รูปถ่าย รอง ผอ.คนที่ 3:</label>
                                        <div style="display: flex; gap: 8px;">
                                            <input type="text" id="deputy3_image" name="deputy3_image" value="<?php echo esc_attr($s['deputy3_image'] ?? 'https://cdn.jsdelivr.net/gh/linux98/SPM-Website@main/assets/executives/deputy3.jpg'); ?>" class="spm-input" style="flex: 1;">
                                            <button type="button" class="button spm-upload-media-btn" data-target="deputy3_image" data-preview="preview_deputy3_image" style="background: #0284C7; color: #FFF; border: none; font-weight: 700; padding: 6px 12px; border-radius: 6px; cursor: pointer;">
                                                📷 เลือกรูปภาพ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">ขอบข่ายภารกิจ / สหวิทยาเขตที่ดูแล:</label>
                                    <input type="text" name="deputy3_scope" value="<?php echo esc_attr($s['deputy3_scope'] ?? 'กำกับ: นิเทศ ติดตามฯ, นโยบายและแผน • ดูแล: ดำรงธรรม, สหสกลราช, สหเบญจพัฒน์'); ?>" class="spm-input">
                                </div>
                                <div style="margin-top: 10px;">
                                    <label class="spm-label">คำกล่าว / วิสัยทัศน์:</label>
                                    <input type="text" name="deputy3_quote" value="<?php echo esc_attr($s['deputy3_quote'] ?? 'ขับเคลื่อนนโยบายสู่การปฏิบัติอย่างเป็นรูปธรรม นิเทศการจัดการศึกษาเชิงรุก ยกระดับหลักสูตรและประกันคุณภาพการศึกษาสู่มาตรฐานสากล'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 5: บริการดิจิทัล 8 เสาหลัก -->
                    <div id="tab-services" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #10B981;">
                            <h3 class="spm-card-head">⚡ ศูนย์บริการดิจิทัล e-Services & ภารกิจหลัก สพม.สกลนคร</h3>
                            
                            <!-- Srv 1 & 2 -->
                            <div class="sps-grid-2">
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">📊 1. ตรวจผลการเรียน (SGS / DoGrade)</strong>
                                    <input type="text" name="srv_sgs_title" value="<?php echo esc_attr($s['srv_sgs_title'] ?? 'ระบบดูเกรดออนไลน์ (DoGrade / SGS)'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="url" name="srv_sgs_url" value="<?php echo esc_attr($s['srv_sgs_url'] ?? 'https://www.dograde.online/sps/'); ?>" class="spm-input">
                                </div>
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">📄 2. งานทะเบียน / ขอเอกสาร ปพ.</strong>
                                    <input type="text" name="srv_reg_title" value="<?php echo esc_attr($s['srv_reg_title'] ?? 'ติดต่องานทะเบียน / ขอเอกสาร ปพ.'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="text" name="srv_reg_url" value="<?php echo esc_attr($s['srv_reg_url'] ?? '/site/e-service/'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Srv 3 & 4 -->
                            <div class="sps-grid-2">
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">💻 3. ห้องเรียนดิจิทัล (Google Classroom / LMS)</strong>
                                    <input type="text" name="srv_lms_title" value="<?php echo esc_attr($s['srv_lms_title'] ?? 'ห้องเรียนดิจิทัล (Google Classroom / LMS)'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="url" name="srv_lms_url" value="<?php echo esc_attr($s['srv_lms_url'] ?? 'https://classroom.google.com'); ?>" class="spm-input">
                                </div>
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">🎓 4. รับสมัครนักเรียนออนไลน์ (Admission)</strong>
                                    <input type="text" name="srv_adm_title" value="<?php echo esc_attr($s['srv_adm_title'] ?? 'ระบบรับสมัครนักเรียนออนไลน์ (Admission)'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="text" name="srv_adm_url" value="<?php echo esc_attr($s['srv_adm_url'] ?? '/site/e-service/'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Srv 5 & 6 -->
                            <div class="sps-grid-2">
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">📋 5. คำร้องและบริการออนไลน์ (e-Service)</strong>
                                    <input type="text" name="srv_esrv_title" value="<?php echo esc_attr($s['srv_esrv_title'] ?? 'คำร้องและบริการออนไลน์ (One-Stop e-Service)'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="text" name="srv_esrv_url" value="<?php echo esc_attr($s['srv_esrv_url'] ?? '/site/e-service/'); ?>" class="spm-input">
                                </div>
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">📚 6. คลังบทเรียน (OBEC Content Center)</strong>
                                    <input type="text" name="srv_obec_title" value="<?php echo esc_attr($s['srv_obec_title'] ?? 'คลังบทเรียนและสื่อดิจิทัล (OBEC Content Center)'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="url" name="srv_obec_url" value="<?php echo esc_attr($s['srv_obec_url'] ?? 'https://contentcenter.obec.go.th'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Srv 7 & 8 -->
                            <div class="sps-grid-2">
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">📰 7. วารสารดิจิทัล สพม.สกลนคร (SPM e-Magazine)</strong>
                                    <input type="text" name="srv_mag_title" value="<?php echo esc_attr($s['srv_mag_title'] ?? 'วารสารและประชาสัมพันธ์ (SPS e-Magazine)'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="text" name="srv_mag_url" value="<?php echo esc_attr($s['srv_mag_url'] ?? '/site/#news'); ?>" class="spm-input">
                                </div>
                                <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                    <strong style="color: #0284C7; font-size: 13.5px; display: block; margin-bottom: 8px;">📑 8. สารบรรณอิเล็กทรอนิกส์ (e-Saraban)</strong>
                                    <input type="text" name="srv_saraban_title" value="<?php echo esc_attr($s['srv_saraban_title'] ?? 'ติดต่องานธุรการและสารบรรณ (e-Saraban)'); ?>" class="spm-input" style="margin-bottom: 8px;">
                                    <input type="text" name="srv_saraban_url" value="<?php echo esc_attr($s['srv_saraban_url'] ?? '/site/e-service/'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 6: สิ่งแวดล้อม Solar Rooftop -->
                    <div id="tab-green" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #10B981;">
                            <h3 class="spm-card-head">🌿 การบริหารจัดการสิ่งแวดล้อม พิกัดดาวเทียม & เครือข่ายสถานศึกษา</h3>
                            <div style="margin-bottom: 16px;">
                                <label class="spm-label">ระบบพลังงานสะอาด / Solar Rooftop สพม.สกลนคร:</label>
                                <input type="text" name="solar_station_title" value="<?php echo esc_attr($s['solar_station_title'] ?? 'พลังงานสะอาด Solar Rooftop อาคาร 2 & 3'); ?>" class="spm-input">
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">กระแสไฟฟ้าที่ผลิตได้ (Solar Power):</label>
                                    <input type="text" name="solar_power_kwh" value="<?php echo esc_attr($s['solar_power_kwh'] ?? '148 kWh/วัน'); ?>" class="spm-input" style="font-weight: 700; color: #10B981;">
                                </div>
                                <div>
                                    <label class="spm-label">ปริมาณลดการปล่อยคาร์บอน (Carbon Reduced):</label>
                                    <input type="text" name="solar_carbon_ton" value="<?php echo esc_attr($s['solar_carbon_ton'] ?? '24.8 ตัน/ปี'); ?>" class="spm-input" style="font-weight: 700; color: #10B981;">
                                </div>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">เปอร์เซ็นต์พื้นที่สีเขียว (Green Shaded Area):</label>
                                    <input type="text" name="green_tree_percent" value="<?php echo esc_attr($s['green_tree_percent'] ?? '65%'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">อัตราการรีไซเคิลขยะ (Recycling Rate):</label>
                                    <input type="text" name="waste_recycle_percent" value="<?php echo esc_attr($s['waste_recycle_percent'] ?? '82%'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 7: ข้อมูลสารสนเทศ บิ๊กดาต้า & สถิติการศึกษา -->
                    <div id="tab-analytics" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #F59E0B;">
                            <h3 class="spm-card-head">📊 สถิติตัวเลขหน้าเว็บหลัก (Key Numerical Counters)</h3>
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">จำนวนนักเรียน:</label>
                                    <input type="text" name="stat_students" value="<?php echo esc_attr($s['stat_students']); ?>" class="spm-input" style="font-weight: 700; color: #F59E0B;">
                                </div>
                                <div>
                                    <label class="spm-label">ครูและบุคลากร:</label>
                                    <input type="text" name="stat_teachers" value="<?php echo esc_attr($s['stat_teachers']); ?>" class="spm-input" style="font-weight: 700; color: #F59E0B;">
                                </div>
                                <div>
                                    <label class="spm-label">ผลสัมฤทธิ์คุณภาพการศึกษา (ประเมินระดับชาติ):</label>
                                    <input type="text" name="stat_tcas" value="<?php echo esc_attr($s['stat_tcas']); ?>" class="spm-input" style="font-weight: 700; color: #F59E0B;">
                                </div>
                            </div>
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">รางวัลระดับชาติ:</label>
                                    <input type="text" name="stat_awards" value="<?php echo esc_attr($s['stat_awards']); ?>" class="spm-input" style="font-weight: 700; color: #F59E0B;">
                                </div>
                                <div>
                                    <label class="spm-label">จำนวนสถานศึกษาในสังกัด (43 โรงเรียน):</label>
                                    <input type="text" name="stat_classrooms" value="<?php echo esc_attr($s['stat_classrooms'] ?? '60 ห้อง'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">พื้นที่รับผิดชอบและขอบเขตบริการ (อำเภอ / ตร.กม.):</label>
                                    <input type="text" name="stat_area" value="<?php echo esc_attr($s['stat_area'] ?? '68 ไร่'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>

                        <div class="spm-card">
                            <h3 class="spm-card-head">🎓 สถิติข้อมูลทางการศึกษา 4 ด้านสำคัญ (District Education Analytics)</h3>
                            <!-- Uni 1 -->
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">ข้อมูลด้านที่ 1 (สหวิทยาเขต):</label>
                                    <input type="text" name="tcas_uni_1_name" value="<?php echo esc_attr($s['tcas_uni_1_name'] ?? 'มหาวิทยาลัยขอนแก่น (มข.)'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">เปอร์เซ็นต์ (%):</label>
                                    <input type="text" name="tcas_uni_1_val" value="<?php echo esc_attr($s['tcas_uni_1_val'] ?? '42%'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">จำนวนนักเรียน:</label>
                                    <input type="text" name="tcas_uni_1_count" value="<?php echo esc_attr($s['tcas_uni_1_count'] ?? '168 คน'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Uni 2 -->
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">ข้อมูลด้านที่ 2 (โรงเรียนในสังกัด):</label>
                                    <input type="text" name="tcas_uni_2_name" value="<?php echo esc_attr($s['tcas_uni_2_name'] ?? 'จุฬาลงกรณ์ฯ / ธรรมศาสตร์ / มหิดล'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">เปอร์เซ็นต์ (%):</label>
                                    <input type="text" name="tcas_uni_2_val" value="<?php echo esc_attr($s['tcas_uni_2_val'] ?? '24%'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">จำนวนนักเรียน:</label>
                                    <input type="text" name="tcas_uni_2_count" value="<?php echo esc_attr($s['tcas_uni_2_count'] ?? '96 คน'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Uni 3 -->
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">ข้อมูลด้านที่ 3 (ข้าราชการครู):</label>
                                    <input type="text" name="tcas_uni_3_name" value="<?php echo esc_attr($s['tcas_uni_3_name'] ?? 'มหาวิทยาลัยมหาสารคาม / เกษตรศาสตร์'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">เปอร์เซ็นต์ (%):</label>
                                    <input type="text" name="tcas_uni_3_val" value="<?php echo esc_attr($s['tcas_uni_3_val'] ?? '20%'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">จำนวนนักเรียน:</label>
                                    <input type="text" name="tcas_uni_3_count" value="<?php echo esc_attr($s['tcas_uni_3_count'] ?? '80 คน'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Uni 4 -->
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">ข้อมูลด้านที่ 4 (นักเรียนในสังกัด):</label>
                                    <input type="text" name="tcas_uni_4_name" value="<?php echo esc_attr($s['tcas_uni_4_name'] ?? 'สถาบันอุดมศึกษาอื่นๆ & สายวิชาชีพ'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">เปอร์เซ็นต์ (%):</label>
                                    <input type="text" name="tcas_uni_4_val" value="<?php echo esc_attr($s['tcas_uni_4_val'] ?? '14%'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">จำนวนนักเรียน:</label>
                                    <input type="text" name="tcas_uni_4_count" value="<?php echo esc_attr($s['tcas_uni_4_count'] ?? '56 คน'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 8: ปฏิทินปฏิบัติงาน & กิจกรรม -->
                    <div id="tab-timeline" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #6366F1;">
                            <h3 class="spm-card-head">📅 วาระงานผู้บริหาร ปฏิทินปฏิบัติงาน & กิจกรรมสำคัญ สพม.สกลนคร</h3>
                            
                            <!-- Event 1 -->
                            <div style="background: #F8FAFC; padding: 18px; border-radius: 12px; border: 1px solid #E2E8F0; margin-bottom: 16px;">
                                <strong style="color: #4F46E5; display: block; margin-bottom: 10px;">📌 กิจกรรมที่ 1:</strong>
                                <div class="sps-grid-2">
                                    <div>
                                        <label class="spm-label">วันที่ (เช่น 01, 15):</label>
                                        <input type="text" name="ev1_day" value="<?php echo esc_attr($s['ev1_day'] ?? '01'); ?>" class="spm-input">
                                    </div>
                                    <div>
                                        <label class="spm-label">เดือน (เช่น พ.ย., ม.ค.):</label>
                                        <input type="text" name="ev1_month" value="<?php echo esc_attr($s['ev1_month'] ?? 'พ.ย.'); ?>" class="spm-input">
                                    </div>
                                </div>
                                <div style="margin-bottom: 10px;">
                                    <label class="spm-label">ชื่อกิจกรรม:</label>
                                    <input type="text" name="ev1_title" value="<?php echo esc_attr($s['ev1_title'] ?? 'กำหนดการเปิดภาคเรียนที่ 2 ปีการศึกษา 2569'); ?>" class="spm-input" style="font-weight: 600;">
                                </div>
                                <div>
                                    <label class="spm-label">รายละเอียดสั้น:</label>
                                    <input type="text" name="ev1_desc" value="<?php echo esc_attr($s['ev1_desc'] ?? 'นักเรียนระดับชั้น ม.1 - ม.6 เข้าแถวเคารพธงชาติและพบครูที่ปรึกษา'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Event 2 -->
                            <div style="background: #F8FAFC; padding: 18px; border-radius: 12px; border: 1px solid #E2E8F0; margin-bottom: 16px;">
                                <strong style="color: #4F46E5; display: block; margin-bottom: 10px;">📌 กิจกรรมที่ 2:</strong>
                                <div class="sps-grid-2">
                                    <div>
                                        <label class="spm-label">วันที่:</label>
                                        <input type="text" name="ev2_day" value="<?php echo esc_attr($s['ev2_day'] ?? '19'); ?>" class="spm-input">
                                    </div>
                                    <div>
                                        <label class="spm-label">เดือน:</label>
                                        <input type="text" name="ev2_month" value="<?php echo esc_attr($s['ev2_month'] ?? 'มิ.ย.'); ?>" class="spm-input">
                                    </div>
                                </div>
                                <div style="margin-bottom: 10px;">
                                    <label class="spm-label">ชื่อกิจกรรม:</label>
                                    <input type="text" name="ev2_title" value="<?php echo esc_attr($s['ev2_title'] ?? 'วันคล้ายวันสถาปนาสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร'); ?>" class="spm-input" style="font-weight: 600;">
                                </div>
                                <div>
                                    <label class="spm-label">รายละเอียดสั้น:</label>
                                    <input type="text" name="ev2_desc" value="<?php echo esc_attr($s['ev2_desc'] ?? 'ครบรอบการก่อตั้งโรงเรียน พิธีทำบุญตักบาตรและมอบทุนการศึกษา'); ?>" class="spm-input">
                                </div>
                            </div>

                            <!-- Event 3 -->
                            <div style="background: #F8FAFC; padding: 18px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                <strong style="color: #4F46E5; display: block; margin-bottom: 10px;">📌 กิจกรรมที่ 3:</strong>
                                <div class="sps-grid-2">
                                    <div>
                                        <label class="spm-label">วันที่:</label>
                                        <input type="text" name="ev3_day" value="<?php echo esc_attr($s['ev3_day'] ?? '25'); ?>" class="spm-input">
                                    </div>
                                    <div>
                                        <label class="spm-label">เดือน:</label>
                                        <input type="text" name="ev3_month" value="<?php echo esc_attr($s['ev3_month'] ?? 'พ.ย.'); ?>" class="spm-input">
                                    </div>
                                </div>
                                <div style="margin-bottom: 10px;">
                                    <label class="spm-label">ชื่อกิจกรรม:</label>
                                    <input type="text" name="ev3_title" value="<?php echo esc_attr($s['ev3_title'] ?? 'กิจกรรมประชุมผู้ปกครองเครือข่ายและชั้นเรียน'); ?>" class="spm-input" style="font-weight: 600;">
                                </div>
                                <div>
                                    <label class="spm-label">รายละเอียดสั้น:</label>
                                    <input type="text" name="ev3_desc" value="<?php echo esc_attr($s['ev3_desc'] ?? 'ร่วมสร้างความร่วมมือระหว่างบ้านและโรงเรียนในการดูแลช่วยเหลือนักเรียน'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 9: คำถามที่พบบ่อย (FAQ) -->
                    <div id="tab-faq" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #ECC86A;">
                            <h3 class="spm-card-head">❓ คำถามที่พบบ่อยหน้าแรก (FAQ Accordion 3 ข้อ)</h3>
                            
                            <!-- FAQ 1 -->
                            <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0; margin-bottom: 16px;">
                                <label class="spm-label">คำถามข้อที่ 1:</label>
                                <input type="text" name="faq1_q" value="<?php echo esc_attr($s['faq1_q'] ?? 'การยื่นขอหนังสือรับรองเงินเดือนและสิทธิประโยชน์ข้าราชการครู ผ่านระบบ e-Services ทำอย่างไร?'); ?>" class="spm-input" style="font-weight: 600; margin-bottom: 8px;">
                                <label class="spm-label">คำตอบข้อที่ 1:</label>
                                <textarea name="faq1_a" rows="3" class="spm-input" style="line-height: 1.5;"><?php echo esc_textarea($s['faq1_a'] ?? 'สำหรับนักเรียนให้กรอกเลขประจำตัวนักเรียน 5 หลัก หรือเลขประจำตัวประชาชน 13 หลัก ส่วนผู้ปกครองใช้เลขประจำตัวประชาชน 13 หลักพร้อมวันเดือนปีเกิดของนักเรียน (เช่น 31/12/2553) หากเข้าไม่ได้ติดต่อขอปรับรหัสได้ที่นายทะเบียนวัดผล'); ?></textarea>
                            </div>

                            <!-- FAQ 2 -->
                            <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0; margin-bottom: 16px;">
                                <label class="spm-label">คำถามข้อที่ 2:</label>
                                <input type="text" name="faq2_q" value="<?php echo esc_attr($s['faq2_q'] ?? 'การติดต่อขอเอกสาร ปพ.1 และ ปพ.7 ต้องเตรียมอะไรบ้าง?'); ?>" class="spm-input" style="font-weight: 600; margin-bottom: 8px;">
                                <label class="spm-label">คำตอบข้อที่ 2:</label>
                                <textarea name="faq2_a" rows="3" class="spm-input" style="line-height: 1.5;"><?php echo esc_textarea($s['faq2_a'] ?? 'เตรียมรูปถ่ายชุดนักเรียนขนาด 1.5 นิ้ว (ถ่ายไม่เกิน 6 เดือน) และบัตรประจำตัวนักเรียนหรือบัตรประชาชน ติดต่อยื่นคำร้องได้ที่ห้องทะเบียน-วัดผล กลุ่มบริหารงานวิชาการ ในวันและเวลาราชการ'); ?></textarea>
                            </div>

                            <!-- FAQ 3 -->
                            <div style="background: #F8FAFC; padding: 16px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                <label class="spm-label">คำถามข้อที่ 3:</label>
                                <input type="text" name="faq3_q" value="<?php echo esc_attr($s['faq3_q'] ?? 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร ตั้งอยู่ที่ใดและติดต่อช่องทางไหนได้บ้าง?'); ?>" class="spm-input" style="font-weight: 600; margin-bottom: 8px;">
                                <label class="spm-label">คำตอบข้อที่ 3:</label>
                                <textarea name="faq3_a" rows="3" class="spm-input" style="line-height: 1.5;"><?php echo esc_textarea($s['faq3_a'] ?? 'ตั้งอยู่ที่ 271 ถนน ไอ ที ยู ตำบล งิ้วด่อน อำเภอเมืองสกลนคร สกลนคร 47000 โทรศัพท์ 042-711-456 หรือติดต่อทางแฟนเพจ Facebook'); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 10: ความโปร่งใส & ITA -->
                    <div id="tab-ita" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #10B981;">
                            <h3 class="spm-card-head">⚖️ การประเมินคุณธรรมและความโปร่งใส (ITA / OIT)</h3>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">คะแนนการประเมิน ITA ล่าสุด:</label>
                                    <input type="text" name="ita_score" value="<?php echo esc_attr($s['ita_score'] ?? '98.50 คะแนน (ระดับ AA)'); ?>" class="spm-input" style="font-weight: 700; color: #10B981;">
                                </div>
                                <div>
                                    <label class="spm-label">ปีงบประมาณที่ประเมิน:</label>
                                    <input type="text" name="ita_year" value="<?php echo esc_attr($s['ita_year'] ?? 'ปีงบประมาณ 2569'); ?>" class="spm-input">
                                </div>
                            </div>
                            <div>
                                <label class="spm-label">ลิงก์เข้าระบบ ITA / OIT หน้ารายงาน:</label>
                                <input type="text" name="ita_link" value="<?php echo esc_attr($s['ita_link'] ?? '/site/ita/'); ?>" class="spm-input">
                            </div>
                        </div>
                    </div>

                    <!-- TAB 11: ติดต่อ โซเชียล & ท้ายเว็บ -->
                    <div id="tab-contact" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #06B6D4;">
                            <h3 class="spm-card-head">📞 ข้อมูลติดต่อราชการและเวลาทำการ</h3>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">เบอร์โทรศัพท์ติดต่อกลาง:</label>
                                    <input type="text" name="phone" value="<?php echo esc_attr($s['phone']); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                                <div>
                                    <label class="spm-label">เบอร์สายด่วน / งานวิชาการ (Hotline):</label>
                                    <input type="text" name="phone_hotline" value="<?php echo esc_attr($s['phone_hotline'] ?? '042-728-195'); ?>" class="spm-input">
                                </div>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">เบอร์โทรสาร (แฟกซ์):</label>
                                    <input type="text" name="fax" value="<?php echo esc_attr($s['fax']); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">อีเมลติดต่อทางการ (Email):</label>
                                    <input type="email" name="email" value="<?php echo esc_attr($s['email']); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">วันและเวลาทำการราชการ (Office Hours):</label>
                                    <input type="text" name="office_hours" value="<?php echo esc_attr($s['office_hours'] ?? 'จันทร์ - ศุกร์: 08:30 - 16:30 น. (เว้นวันหยุดราชการ)'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">ลิงก์ Google Maps สำหรับเปิดนำทาง:</label>
                                    <input type="url" name="google_maps_url" value="<?php echo esc_attr($s['google_maps_url'] ?? 'https://www.google.com/maps/place/สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร/@17.1459455,104.1531959,17z'); ?>" class="spm-input">
                                </div>
                            </div>
                            <div>
                                <label class="spm-label">ที่ตั้งสำนักงานเขต (Office Address):</label>
                                <input type="text" name="address" value="<?php echo esc_attr($s['address']); ?>" class="spm-input" style="font-weight: 600;">
                            </div>
                        </div>

                        <div class="spm-card">
                            <h3 class="spm-card-head">🌐 ช่องทางการสื่อสารและโซเชียลมีเดีย สพม.สกลนคร</h3>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">Facebook Page URL:</label>
                                    <input type="url" name="facebook_url" value="<?php echo esc_attr($s['facebook_url']); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">LINE Official Account ID / Link:</label>
                                    <input type="text" name="line_id" value="<?php echo esc_attr($s['line_id']); ?>" class="spm-input">
                                </div>
                            </div>
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">YouTube Channel URL:</label>
                                    <input type="url" name="youtube_url" value="<?php echo esc_attr($s['youtube_url']); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">TikTok สพม.สกลนคร URL:</label>
                                    <input type="url" name="tiktok_url" value="<?php echo esc_attr($s['tiktok_url'] ?? 'https://www.tiktok.com'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">Instagram สพม.สกลนคร URL:</label>
                                    <input type="url" name="instagram_url" value="<?php echo esc_attr($s['instagram_url'] ?? 'https://www.instagram.com'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>

                        <div class="spm-card">
                            <h3 class="spm-card-head">📜 รหัสหน่วยงานและส่วนท้ายเว็บ สพม.สกลนคร (District Codes & Footer)</h3>
                            <div class="sps-grid-3">
                                <div>
                                    <label class="spm-label">รหัสเขตพื้นที่การศึกษา (สพม.สกลนคร):</label>
                                    <input type="text" name="school_code_10" value="<?php echo esc_attr($s['school_code_10'] ?? '1047540628'); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                                <div>
                                    <label class="spm-label">รหัส SMIS:</label>
                                    <input type="text" name="school_code_smis" value="<?php echo esc_attr($s['school_code_smis'] ?? '47012003'); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                                <div>
                                    <label class="spm-label">รหัส OBEC:</label>
                                    <input type="text" name="school_code_obec" value="<?php echo esc_attr($s['school_code_obec'] ?? '540628'); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label class="spm-label">ข้อความรับรองหน่วยงานท้ายเว็บ:</label>
                                <input type="text" name="school_code_line" value="<?php echo esc_attr($s['school_code_line'] ?? 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร) | สพฐ. กระทรวงศึกษาธิการ'); ?>" class="spm-input">
                            </div>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ข้อความสงวนลิขสิทธิ์ (Footer Copyright):</label>
                                    <input type="text" name="footer_copyright" value="<?php echo esc_attr($s['footer_copyright'] ?? '© 2026 สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (Sakonnakhonpatanasuksa School). All Rights Reserved.'); ?>" class="spm-input">
                                </div>
                                <div>
                                    <label class="spm-label">สีประจำเขตพื้นที่ & สโลแกนท้ายเว็บ:</label>
                                    <input type="text" name="footer_colors" value="<?php echo esc_attr($s['footer_colors'] ?? 'สีประจำโรงเรียน: น้ำเงิน - ชมพู | ปัญญา นรานํ รตนํ'); ?>" class="spm-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 12: ผู้ช่วย AI น้องภูพาน AI -->
                    <div id="tab-ai" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #6366F1;">
                            <h3 class="spm-card-head">🤖 ผู้ช่วยอัจฉริยะ AI น้องภูพาน AI (AI Chatbot Settings)</h3>
                            <div class="sps-grid-2">
                                <div>
                                    <label class="spm-label">ชื่อผู้ช่วย AI:</label>
                                    <input type="text" name="ai_bot_name" value="<?php echo esc_attr($s['ai_bot_name'] ?? 'น้องภูพาน AI AI'); ?>" class="spm-input" style="font-weight: 700;">
                                </div>
                                <div>
                                    <label class="spm-label">ข้อความสถานะ (Status Badge):</label>
                                    <input type="text" name="ai_bot_status" value="<?php echo esc_attr($s['ai_bot_status'] ?? 'ออนไลน์ พร้อมตอบคำถาม 24 ชม.'); ?>" class="spm-input">
                                </div>
                            </div>
                            <div>
                                <label class="spm-label">คำทักทายต้อนรับแรกเริ่ม (AI Welcome Greeting):</label>
                                <textarea name="ai_welcome_text" rows="3" class="spm-input" style="line-height: 1.5;"><?php echo esc_textarea($s['ai_welcome_text'] ?? 'สวัสดีครับ! ผมคือ น้องภูพาน AI AI ผู้ช่วยดิจิทัลสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร ยินดีต้อนรับนักเรียน ผู้ปกครอง และคุณครูครับ มีเรื่องไหนให้ผมช่วยแนะนำไหมครับ?'); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 13: ธีมสีน้ำเงินคราม-เหลืองทอง & อัตลักษณ์ สพม. (Sakon Kram & Royal Gold) -->
                    <div id="tab-theme" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #ECC86A;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; flex-wrap: wrap;">
                                <div>
                                    <h3 class="spm-card-head" style="margin-bottom: 4px;">🎨 ปรับแต่งธีมสีน้ำเงินคราม-เหลืองทอง และอัตลักษณ์ สพม.สกลนคร (Sakon Kram & Royal Gold Identity)</h3>
                                    <p style="font-size: 13.5px; color: #64748B; margin: 0;">
                                        เปลี่ยนชุดสีอัตลักษณ์ของโรงเรียนได้ทันที ระบบจะอัปเดตสีพื้นหลัง สีปุ่ม กรอบประกาย และเอฟเฟกต์ทั้งหมดบนเว็บไซต์ให้สอดคล้องกับสีประจำสถาบันของท่านโดยอัตโนมัติ
                                    </p>
                                </div>
                                <span style="background: rgba(236,200,106,0.15); border: 1px solid rgba(236,200,106,0.4); color: #B45309; font-size: 12px; font-weight: 700; padding: 6px 16px; border-radius: 20px;">
                                    LIVE DYNAMIC STYLING
                                </span>
                            </div>

                            <!-- Color Palette Presets -->
                            <div style="margin-top: 22px; margin-bottom: 24px;">
                                <label class="spm-label" style="font-size: 13.5px; font-weight: 700; color: #0F172A; margin-bottom: 12px; display: block;">
                                    ⚡ เลือกชุดสีสำเร็จรูปยอดนิยม (คลิกเพื่อนำไปใช้ทันที):
                                </label>
                                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 12px;">
                                    <!-- Preset 1: SPS Pink & Navy -->
                                    <div onclick="applyThemePreset('spm_kram_gold')" style="cursor: pointer; padding: 12px 14px; border-radius: 12px; border: 2px solid #E2E8F0; background: #FFFFFF; display: flex; align-items: center; gap: 12px; transition: all 0.2s;" onmouseover="this.style.borderColor='#ECC86A'" onmouseout="this.style.borderColor='#E2E8F0'">
                                        <div style="display: flex; gap: 4px;">
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #0F172A; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #ECC86A; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                        </div>
                                        <div>
                                            <div style="font-weight: 700; font-size: 13px; color: #0F172A;">สกลนครพัฒนศึกษา</div>
                                            <div style="font-size: 11.5px; color: #64748B;">น้ำเงินเข้ม • ชมพูสว่าง</div>
                                        </div>
                                    </div>

                                    <!-- Preset 2: Navy Gold -->
                                    <div onclick="applyThemePreset('navy_gold')" style="cursor: pointer; padding: 12px 14px; border-radius: 12px; border: 2px solid #E2E8F0; background: #FFFFFF; display: flex; align-items: center; gap: 12px; transition: all 0.2s;" onmouseover="this.style.borderColor='#EAB308'" onmouseout="this.style.borderColor='#E2E8F0'">
                                        <div style="display: flex; gap: 4px;">
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #0B192C; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #EAB308; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                        </div>
                                        <div>
                                            <div style="font-weight: 700; font-size: 13px; color: #0F172A;">ราชธานีกรมท่า</div>
                                            <div style="font-size: 11.5px; color: #64748B;">กรมท่าเข้ม • ทองจักรพรรดิ</div>
                                        </div>
                                    </div>

                                    <!-- Preset 3: Emerald White -->
                                    <div onclick="applyThemePreset('emerald_white')" style="cursor: pointer; padding: 12px 14px; border-radius: 12px; border: 2px solid #E2E8F0; background: #FFFFFF; display: flex; align-items: center; gap: 12px; transition: all 0.2s;" onmouseover="this.style.borderColor='#10B981'" onmouseout="this.style.borderColor='#E2E8F0'">
                                        <div style="display: flex; gap: 4px;">
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #064E3B; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #10B981; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                        </div>
                                        <div>
                                            <div style="font-weight: 700; font-size: 13px; color: #0F172A;">พฤกษามรกต</div>
                                            <div style="font-size: 11.5px; color: #64748B;">เขียวมรกต • มรกตสว่าง</div>
                                        </div>
                                    </div>

                                    <!-- Preset 4: Crimson Gold -->
                                    <div onclick="applyThemePreset('crimson_gold')" style="cursor: pointer; padding: 12px 14px; border-radius: 12px; border: 2px solid #E2E8F0; background: #FFFFFF; display: flex; align-items: center; gap: 12px; transition: all 0.2s;" onmouseover="this.style.borderColor='#DC2626'" onmouseout="this.style.borderColor='#E2E8F0'">
                                        <div style="display: flex; gap: 4px;">
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #7F1D1D; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #F59E0B; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                        </div>
                                        <div>
                                            <div style="font-weight: 700; font-size: 13px; color: #0F172A;">เพลิงสุริยัน</div>
                                            <div style="font-size: 11.5px; color: #64748B;">แดงเลือดนก • ทองประกาย</div>
                                        </div>
                                    </div>

                                    <!-- Preset 5: Ocean Amber -->
                                    <div onclick="applyThemePreset('ocean_amber')" style="cursor: pointer; padding: 12px 14px; border-radius: 12px; border: 2px solid #E2E8F0; background: #FFFFFF; display: flex; align-items: center; gap: 12px; transition: all 0.2s;" onmouseover="this.style.borderColor='#0284C7'" onmouseout="this.style.borderColor='#E2E8F0'">
                                        <div style="display: flex; gap: 4px;">
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #0C4A6E; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #F97316; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                        </div>
                                        <div>
                                            <div style="font-weight: 700; font-size: 13px; color: #0F172A;">สมุทรไพศาล</div>
                                            <div style="font-size: 11.5px; color: #64748B;">ฟ้าน้ำทะเล • ส้มคอรัล</div>
                                        </div>
                                    </div>

                                    <!-- Preset 6: Royal Purple -->
                                    <div onclick="applyThemePreset('royal_purple')" style="cursor: pointer; padding: 12px 14px; border-radius: 12px; border: 2px solid #E2E8F0; background: #FFFFFF; display: flex; align-items: center; gap: 12px; transition: all 0.2s;" onmouseover="this.style.borderColor='#9333EA'" onmouseout="this.style.borderColor='#E2E8F0'">
                                        <div style="display: flex; gap: 4px;">
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #4C1D95; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                            <span style="width: 22px; height: 22px; border-radius: 50%; background: #EAB308; display: inline-block; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
                                        </div>
                                        <div>
                                            <div style="font-weight: 700; font-size: 13px; color: #0F172A;">ม่วงศิวิไลซ์</div>
                                            <div style="font-size: 11.5px; color: #64748B;">ม่วงสง่า • เหลืองบุษราคัม</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Pickers Grid -->
                            <div class="sps-grid-3" style="background: #F8FAFC; padding: 20px; border-radius: 12px; border: 1px solid #E2E8F0;">
                                <div>
                                    <label class="spm-label">สีหลัก (Primary Navbar & Main Text):</label>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <input type="color" id="picker_theme_primary" value="<?php echo esc_attr($s['theme_primary'] ?? '#0F172A'); ?>" onchange="document.getElementById('input_theme_primary').value = this.value;" style="width: 48px; height: 42px; border: none; cursor: pointer; border-radius: 8px;">
                                        <input type="text" id="input_theme_primary" name="theme_primary" value="<?php echo esc_attr($s['theme_primary'] ?? '#0F172A'); ?>" class="spm-input" onchange="document.getElementById('picker_theme_primary').value = this.value;">
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">สีหลักเข้มสุด (Primary Dark - Background):</label>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <input type="color" id="picker_theme_primary_dark" value="<?php echo esc_attr($s['theme_primary_dark'] ?? '#060B19'); ?>" onchange="document.getElementById('input_theme_primary_dark').value = this.value;" style="width: 48px; height: 42px; border: none; cursor: pointer; border-radius: 8px;">
                                        <input type="text" id="input_theme_primary_dark" name="theme_primary_dark" value="<?php echo esc_attr($s['theme_primary_dark'] ?? '#060B19'); ?>" class="spm-input" onchange="document.getElementById('picker_theme_primary_dark').value = this.value;">
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">สีรอง / ไฮไลต์ (Secondary - Buttons & Accents):</label>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <input type="color" id="picker_theme_secondary" value="<?php echo esc_attr($s['theme_secondary'] ?? '#1E40AF'); ?>" onchange="document.getElementById('input_theme_secondary').value = this.value;" style="width: 48px; height: 42px; border: none; cursor: pointer; border-radius: 8px;">
                                        <input type="text" id="input_theme_secondary" name="theme_secondary" value="<?php echo esc_attr($s['theme_secondary'] ?? '#1E40AF'); ?>" class="spm-input" onchange="document.getElementById('picker_theme_secondary').value = this.value;">
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">สีรองเข้ม (Secondary Dark - Active/Hover):</label>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <input type="color" id="picker_theme_secondary_dark" value="<?php echo esc_attr($s['theme_secondary_dark'] ?? '#1E3A8A'); ?>" onchange="document.getElementById('input_theme_secondary_dark').value = this.value;" style="width: 48px; height: 42px; border: none; cursor: pointer; border-radius: 8px;">
                                        <input type="text" id="input_theme_secondary_dark" name="theme_secondary_dark" value="<?php echo esc_attr($s['theme_secondary_dark'] ?? '#1E3A8A'); ?>" class="spm-input" onchange="document.getElementById('picker_theme_secondary_dark').value = this.value;">
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">สีรองสว่าง (Secondary Light - Badges):</label>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <input type="color" id="picker_theme_secondary_light" value="<?php echo esc_attr($s['theme_secondary_light'] ?? '#3B82F6'); ?>" onchange="document.getElementById('input_theme_secondary_light').value = this.value;" style="width: 48px; height: 42px; border: none; cursor: pointer; border-radius: 8px;">
                                        <input type="text" id="input_theme_secondary_light" name="theme_secondary_light" value="<?php echo esc_attr($s['theme_secondary_light'] ?? '#3B82F6'); ?>" class="spm-input" onchange="document.getElementById('picker_theme_secondary_light').value = this.value;">
                                    </div>
                                </div>
                                <div>
                                    <label class="spm-label">สีทองเกียรติยศ (Gold / Honor Badge):</label>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <input type="color" id="picker_theme_gold" value="<?php echo esc_attr($s['theme_gold'] ?? '#EAB308'); ?>" onchange="document.getElementById('input_theme_gold').value = this.value;" style="width: 48px; height: 42px; border: none; cursor: pointer; border-radius: 8px;">
                                        <input type="text" id="input_theme_gold" name="theme_gold" value="<?php echo esc_attr($s['theme_gold'] ?? '#EAB308'); ?>" class="spm-input" onchange="document.getElementById('picker_theme_gold').value = this.value;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 14: พิมพ์เขียวดิจิทัล & ศูนย์จำลองข้อมูลเครือข่าย สพม. -->
                    <div id="tab-blueprint" class="spm-tab-section">
                        <div class="spm-card" style="border-left: 5px solid #3B82F6;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; flex-wrap: wrap;">
                                <div>
                                    <h3 class="spm-card-head" style="margin-bottom: 4px;">🏛️ พิมพ์เขียวศูนย์บัญชาการ สพม.สกลนคร (Master District Blueprint Engine)</h3>
                                    <p style="font-size: 13.5px; color: #64748B; margin: 0;">
                                        ระบบถ่ายทอดและโคลนนิ่งเทมเพลตเว็บไซต์อัจฉริยะ ให้โรงเรียนในสังกัดและเครือข่ายนำไปใช้งานได้ทันทีในคลิกเดียว (Turnkey Ready-to-use)
                                    </p>
                                </div>
                                <span style="background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%); color: #FFFFFF; font-size: 12px; font-weight: 700; padding: 6px 16px; border-radius: 20px; box-shadow: 0 4px 12px rgba(59,130,246,0.35);">
                                    BLUEPRINT V2.0 PRO
                                </span>
                            </div>

                            <!-- Quick School Geographic / Context Setup -->
                            <div style="margin-top: 24px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 20px;">
                                <div style="font-size: 14px; font-weight: 700; color: #0F172A; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                    📍 ข้อมูลสังกัดและพิกัดภูมิศาสตร์ (สำหรับระบบตรวจวัดสภาพอากาศ & PM2.5 ดาวเทียมเฉพาะพื้นที่โรงเรียน)
                                </div>
                                <div class="sps-grid-3">
                                    <div>
                                        <label class="spm-label">สังกัดส่วนราชการระดับกระทรวง:</label>
                                        <input type="text" name="school_jurisdiction" value="<?php echo esc_attr($s['school_jurisdiction'] ?? 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)'); ?>" class="spm-input">
                                    </div>
                                    <div>
                                        <label class="spm-label">พิกัดละติจูด (Office Latitude):</label>
                                        <input type="text" name="school_lat" value="<?php echo esc_attr($s['school_lat'] ?? '17.1459455'); ?>" class="spm-input" placeholder="17.1459455">
                                    </div>
                                    <div>
                                        <label class="spm-label">พิกัดลองจิจูด (Office Longitude):</label>
                                        <input type="text" name="school_lon" value="<?php echo esc_attr($s['school_lon'] ?? '104.1531959'); ?>" class="spm-input" placeholder="104.1531959">
                                    </div>
                                </div>
                            </div>

                            <!-- 1-Click Export / Import Hub -->
                            <div style="margin-top: 24px; display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 18px;">
                                <!-- Card 1: Export Blueprint -->
                                <div style="background: #EFF6FF; border: 2px dashed #93C5FD; border-radius: 14px; padding: 22px;">
                                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                        <div style="width: 44px; height: 44px; border-radius: 10px; background: #3B82F6; color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                            📥
                                        </div>
                                        <div>
                                            <h4 style="margin: 0; font-size: 16px; color: #1E3A8A; font-weight: 800;">ส่งออกพิมพ์เขียว (Export Blueprint)</h4>
                                            <div style="font-size: 12px; color: #60A5FA;">ดาวน์โหลดไฟล์ข้อมูลทั้งหมดเป็น JSON 1 คลิก</div>
                                        </div>
                                    </div>
                                    <p style="font-size: 13px; color: #334155; line-height: 1.6; margin-bottom: 16px;">
                                        สำรองข้อมูลโครงสร้างเว็บไซต์ ทั้งสีประจำโรงเรียน, หลักสูตร, ผู้บริหาร, ข้อมูลสถิติ, ข้อมูลติดต่อ และการตั้งค่าทั้งหมด 120+ รายการ เพื่อใช้เป็นแม่แบบให้โรงเรียนอื่น
                                    </p>
                                    <button type="button" onclick="exportSchoolBlueprint()" style="width: 100%; background: #2563EB; color: #FFFFFF; border: none; padding: 12px 18px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0 4px 12px rgba(37,99,235,0.3);">
                                        <span>📥 ดาวน์โหลดไฟล์ school_blueprint.json</span>
                                    </button>
                                </div>

                                <!-- Card 2: Import Blueprint -->
                                <div style="background: #F0FDF4; border: 2px dashed #86EFAC; border-radius: 14px; padding: 22px;">
                                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                        <div style="width: 44px; height: 44px; border-radius: 10px; background: #10B981; color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                            📤
                                        </div>
                                        <div>
                                            <h4 style="margin: 0; font-size: 16px; color: #065F46; font-weight: 800;">นำเข้าพิมพ์เขียว (Import Blueprint)</h4>
                                            <div style="font-size: 12px; color: #34D399;">อัปโหลดไฟล์ JSON เพื่อแปลงโฉมเว็บทันที</div>
                                        </div>
                                    </div>
                                    <p style="font-size: 13px; color: #334155; line-height: 1.6; margin-bottom: 16px;">
                                        นำเข้าพิมพ์เขียวจากโรงเรียนอื่น หรือไฟล์สำรองข้อมูล ระบบจะกรอกฟอร์มทุกหมวดหมู่ให้โดยอัตโนมัติ พร้อมอัปเดตเว็บไซต์ให้เข้ากับบริบทใหม่ได้ทันที
                                    </p>
                                    <input type="file" id="blueprintFileInput" accept=".json" style="display: none;" onchange="importSchoolBlueprint(event)">
                                    <button type="button" onclick="document.getElementById('blueprintFileInput').click();" style="width: 100%; background: #059669; color: #FFFFFF; border: none; padding: 12px 18px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0 4px 12px rgba(5,150,105,0.3);">
                                        <span>📤 เลือกไฟล์ JSON เพื่อนำเข้า</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Built-in Turnkey Blueprint Templates -->
                            <div style="margin-top: 28px;">
                                <h4 style="margin: 0 0 14px; font-size: 15px; color: #0F172A; font-weight: 700;">
                                    📚 หรือเลือกใช้งานแม่แบบพิมพ์เขียวมาตรฐาน (Click to Load Starter Blueprint):
                                </h4>
                                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 14px;">
                                    <div style="border: 1px solid #CBD5E1; border-radius: 12px; padding: 16px; background: #FFFFFF;">
                                        <div style="font-weight: 800; font-size: 14px; color: #1E293B; margin-bottom: 4px;">🏫 มัธยมศึกษาขนาดใหญ่พิเศษ (สพม.)</div>
                                        <div style="font-size: 12px; color: #64748B; margin-bottom: 12px;">แผนวิทย์-คณิต-คอม 8 เสาหลัก ITA สูง ครบครัน</div>
                                        <button type="button" onclick="loadSampleBlueprint('spm_large')" style="background: #F1F5F9; color: #0F172A; border: 1px solid #CBD5E1; padding: 8px 14px; border-radius: 8px; font-size: 12.5px; font-weight: 700; cursor: pointer; width: 100%;">
                                            โหลดพิมพ์เขียวแม่แบบ สพม.
                                        </button>
                                    </div>
                                    <div style="border: 1px solid #CBD5E1; border-radius: 12px; padding: 16px; background: #FFFFFF;">
                                        <div style="font-weight: 800; font-size: 14px; color: #1E293B; margin-bottom: 4px;">🌍 มัธยมศึกษามาตรฐานสากล (World-Class)</div>
                                        <div style="font-size: 12px; color: #64748B; margin-bottom: 12px;">เน้นภาษาอังกฤษ ห้องเรียนพิเศษ MEP / EP / STEAM</div>
                                        <button type="button" onclick="loadSampleBlueprint('world_class')" style="background: #F1F5F9; color: #0F172A; border: 1px solid #CBD5E1; padding: 8px 14px; border-radius: 8px; font-size: 12.5px; font-weight: 700; cursor: pointer; width: 100%;">
                                            โหลดพิมพ์เขียว World-Class
                                        </button>
                                    </div>
                                    <div style="border: 1px solid #CBD5E1; border-radius: 12px; padding: 16px; background: #FFFFFF;">
                                        <div style="font-weight: 800; font-size: 14px; color: #1E293B; margin-bottom: 4px;">🎒 ประถมศึกษาและขยายโอกาส (สพป.)</div>
                                        <div style="font-size: 12px; color: #64748B; margin-bottom: 12px;">อนุบาล-ม.3 เน้นชุมชน ทักษะชีวิต และสิ่งแวดล้อม</div>
                                        <button type="button" onclick="loadSampleBlueprint('spp_primary')" style="background: #F1F5F9; color: #0F172A; border: 1px solid #CBD5E1; padding: 8px 14px; border-radius: 8px; font-size: 12.5px; font-weight: 700; cursor: pointer; width: 100%;">
                                            โหลดพิมพ์เขียว สพป.
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sticky Save Bar -->
            <div class="spm-sticky-bar">
                <div style="display: flex; align-items: center; gap: 14px; color: #E2E8F0; font-size: 13.5px;">
                    <span style="font-size: 22px;">💾</span>
                    <div>
                        <strong style="color: #FFFFFF;">พร้อมบันทึกการเปลี่ยนแปลงศูนย์บัญชาการ (150+ รายการ)</strong>
                        <div style="font-size: 12px; color: #94A3B8;">กดบันทึกแล้วระบบจะอัปเดตข้อมูลขึ้นหน้าเว็บจริงแบบเรียลไทม์</div>
                    </div>
                </div>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" style="color: #94A3B8; text-decoration: none; font-size: 13px; font-weight: 600; padding: 10px 16px;">
                        ยกเลิก / ไปหน้าเว็บ
                    </a>
                    <button type="submit" name="spm_save_settings" style="background: linear-gradient(135deg, #1E40AF 0%, #1E3A8A 100%); color: #FFFFFF; border: none; padding: 13px 36px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; box-shadow: 0 4px 18px rgba(236,72,153,0.45); display: inline-flex; align-items: center; gap: 8px;">
                        💾 บันทึกข้อมูลทั้งหมดทันที
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // SCHOOL PRESET BLUEPRINTS DATA (สพม.สกลนคร)
    var SCHOOL_PRESETS = {
        'sps': {
            badge: '🌸',
            school_name_th: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
            school_name_en: 'Secondary Educational Service Area Office Sakon Nakhon',
            school_name_short: 'สพม.สกลนคร • SESAO Sakon Nakhon',
            district: 'อำเภอเมืองสกลนคร',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'น้ำเงิน - ชมพู',
            theme_primary: '#0F172A',
            theme_primary_dark: '#060B19',
            theme_secondary: '#EC4899',
            theme_secondary_dark: '#DB2777',
            theme_secondary_light: '#F472B6',
            theme_gold: '#EAB308',
            school_lat: '17.1459455',
            school_lon: '104.1531959',
            address: '271 ถนน ไอ ที ยู ตำบล งิ้วด่อน อำเภอเมืองสกลนคร สกลนคร 47000',
            phone: '042-711-456',
            school_motto: 'สกลนครพัฒนศึกษา ก้าวสู่ความเป็นเลิศ ทางวิชาการ เทคโนโลยี และสิ่งแวดล้อม',
            school_philosophy: 'ปญฺญา นรานํ รตนํ • ปัญญาเป็นที่พึ่งของนรชน',
            hero_badge: 'SMART SECONDARY EDUCATION PLATFORM',
            hero_title_1: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร',
            hero_title_2: 'สร้างสรรค์คนดี มีปัญญา ก้าวทันโลกดิจิทัล',
            hero_desc: 'มุ่งพัฒนาผู้เรียนระดับมัธยมศึกษาให้ใฝ่รู้ใฝ่เรียน มีระเบียบวินัย และมีสัมมาคารวะ ยกระดับผลสัมฤทธิ์ทางการเรียนด้วยนวัตกรรมและเทคโนโลยีสมัยใหม่ ภายใต้รั้วน้ำเงิน-ชมพู',
            ai_bot_name: 'น้องภูพาน AI AI',
            ai_welcome_text: 'สวัสดีครับ! ผมคือ น้องภูพาน AI AI ผู้ช่วยดิจิทัลสำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร ยินดีต้อนรับนักเรียน ผู้ปกครอง และคุณครูครับ มีเรื่องไหนให้ผมช่วยแนะนำไหมครับ?',
            footer_copyright: '© 2026 สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (Secondary Educational Service Area Office Sakon Nakhon). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: น้ำเงิน - ชมพู | ปัญญา นรานํ รตนํ'
        },
        'pkw': {
            badge: '🌿',
            school_name_th: 'โรงเรียนพังโคนวิทยาคม',
            school_name_en: 'Phangkhonwittayakom School',
            school_name_short: 'พ.ค.ว. • PKW',
            district: 'อำเภอพังโคน',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'เขียว - ขาว',
            theme_primary: '#064E3B',
            theme_primary_dark: '#022C22',
            theme_secondary: '#10B981',
            theme_secondary_dark: '#059669',
            theme_secondary_light: '#34D399',
            theme_gold: '#F59E0B',
            school_lat: '17.3872',
            school_lon: '103.7198',
            address: 'หมู่ 1 ตำบลพังโคน อำเภอพังโคน จังหวัดสกลนคร 47160',
            phone: '042-771-123',
            school_motto: 'เรียนดี กีฬาเด่น เน้นคุณธรรม สัมพันธ์ชุมชน ก้าวไกลสู่สากล',
            school_philosophy: 'สุโข ปญฺญา ปฏิลาโภ • ความได้ปัญญา นำมาซึ่งความสุข',
            hero_badge: 'EXCELLENCE IN EDUCATION & COMMUNITY',
            hero_title_1: 'โรงเรียนพังโคนวิทยาคม',
            hero_title_2: 'แหล่งเรียนรู้คู่คุณธรรม นำวิชาการ สานสัมพันธ์ชุมชน',
            hero_desc: 'มุ่งมั่นพัฒนาเยาวชนอำเภอพังโคนให้เป็นเลิศทางวิชาการ มีทักษะอาชีพและทักษะชีวิต ก้าวทันเทคโนโลยีศตวรรษที่ 21 ภายใต้รั้วเขียว-ขาว',
            ai_bot_name: 'น้องพังโคน AI',
            ai_welcome_text: 'สวัสดีครับ! ผมคือ น้องพังโคน AI ผู้ช่วยดิจิทัลโรงเรียนพังโคนวิทยาคม ยินดีต้อนรับนักเรียนและผู้ปกครองทุกท่านครับ มีอะไรให้ผมรับใช้ครับ?',
            footer_copyright: '© 2026 โรงเรียนพังโคนวิทยาคม (Phangkhonwittayakom School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: เขียว - ขาว | สุโข ปญฺญา ปฏิลาโภ'
        },
        'skr': {
            badge: '👑',
            school_name_th: 'โรงเรียนสกลราชวิทยานุกูล',
            school_name_en: 'Sakonrajwittayanukul School',
            school_name_short: 'ส.ร.น. • SKR',
            district: 'อำเภอเมืองสกลนคร',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'ขาว - กรมท่า',
            theme_primary: '#0B192C',
            theme_primary_dark: '#040D1A',
            theme_secondary: '#3B82F6',
            theme_secondary_dark: '#2563EB',
            theme_secondary_light: '#60A5FA',
            theme_gold: '#EAB308',
            school_lat: '17.1664',
            school_lon: '104.1486',
            address: 'ถนนใสสว่าง ตำบลธาตุเชิงชุม อำเภอเมืองสกลนคร จังหวัดสกลนคร 47000',
            phone: '042-711-209',
            school_motto: 'ประพฤติดี มีวิชา กีฬาเด่น เน้นวินัย ใฝ่คุณธรรม',
            school_philosophy: 'นตฺถิ ปญฺญา สมา อาภา • แสงสว่างเสมอด้วยปัญญาไม่มี',
            hero_badge: 'PREMIER SECONDARY ACADEMY SAKON NAKHON',
            hero_title_1: 'โรงเรียนสกลราชวิทยานุกูล',
            hero_title_2: 'โรงเรียนยอดนิยมอันดับ 1 แห่งจังหวัดสกลนคร',
            hero_desc: 'สถาบันการศึกษาชั้นนำผู้บุกเบิกความเป็นเลิศทางวิทยาศาสตร์ คณิตศาสตร์ ภาษาศาสตร์ และนวัตกรรมสู่มาตรฐานสากล',
            ai_bot_name: 'น้องสกลราช AI',
            ai_welcome_text: 'สวัสดีครับ! ยินดีต้อนรับสู่โรงเรียนสกลราชวิทยานุกูล ผมคือ น้องสกลราช AI พร้อมให้ข้อมูลหลักสูตร การรับสมัคร และกิจกรรมครับ',
            footer_copyright: '© 2026 โรงเรียนสกลราชวิทยานุกูล (Sakonrajwittayanukul School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: ขาว - กรมท่า | นตฺถิ ปญฺญา สมา อาภา'
        },
        'tnw': {
            badge: '🍊',
            school_name_th: 'โรงเรียนธาตุนารายณ์วิทยา',
            school_name_en: 'Thatnaraiwittaya School',
            school_name_short: 'ธ.น.ว. • TNW',
            district: 'อำเภอเมืองสกลนคร',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'แสด - เทา',
            theme_primary: '#1E293B',
            theme_primary_dark: '#0F172A',
            theme_secondary: '#F97316',
            theme_secondary_dark: '#EA580C',
            theme_secondary_light: '#FB923C',
            theme_gold: '#EAB308',
            school_lat: '17.1895',
            school_lon: '104.0921',
            address: 'ถนนนิตโย ตำบลธาตุเชิงชุม อำเภอเมืองสกลนคร จังหวัดสกลนคร 47000',
            phone: '042-712-401',
            school_motto: 'วิชาการก้าวหน้า กีฬาเลิศล้ำ คุณธรรมนำหน้า พัฒนาสิ่งแวดล้อม',
            school_philosophy: 'ปญฺญา โลกสฺมิ ปชฺโชโต • ปัญญาเป็นแสงสว่างในโลก',
            hero_badge: 'MODERN EDUCATION HUB OF SAKON NAKHON',
            hero_title_1: 'โรงเรียนธาตุนารายณ์วิทยา',
            hero_title_2: 'ปัญญาเป็นแสงสว่างในโลก สู่การพัฒนาที่ยั่งยืน',
            hero_desc: 'มุ่งจัดการศึกษาคุณภาพมาตรฐาน สรรค์สร้างคนดีมีปัญญา ส่งเสริมศิลปวัฒนธรรมและกีฬา รักษาสิ่งแวดล้อม ภายใต้รั้วแสด-เทา',
            ai_bot_name: 'น้องธาตุนารายณ์ AI',
            ai_welcome_text: 'สวัสดีครับ! ผมคือ น้องธาตุนารายณ์ AI พร้อมให้บริการข้อมูลการเรียนการสอนและบริการดิจิทัลของโรงเรียนธาตุนารายณ์วิทยาครับ',
            footer_copyright: '© 2026 โรงเรียนธาตุนารายณ์วิทยา (Thatnaraiwittaya School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: แสด - เทา | ปญฺญา โลกสฺมิ ปชฺโชโต'
        },
        'swd': {
            badge: '⭐',
            school_name_th: 'โรงเรียนสว่างแดนดิน',
            school_name_en: 'Sawangdaendin School',
            school_name_short: 'ส.ด. • SWD',
            district: 'อำเภอสว่างแดนดิน',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'น้ำเงิน - เหลือง',
            theme_primary: '#1E3A8A',
            theme_primary_dark: '#172554',
            theme_secondary: '#EAB308',
            theme_secondary_dark: '#CA8A04',
            theme_secondary_light: '#FDE047',
            theme_gold: '#F59E0B',
            school_lat: '17.4754',
            school_lon: '103.4589',
            address: 'ตำบลสว่างแดนดิน อำเภอสว่างแดนดิน จังหวัดสกลนคร 47110',
            phone: '042-721-120',
            school_motto: 'การศึกษาเด่น เน้นคุณธรรม นำวิชาการ สานสัมพันธ์ชุมชน',
            school_philosophy: 'วิชฺชา จรณ สมฺปนฺโน • ผู้สมบูรณ์ด้วยวิชาและความประพฤติ',
            hero_badge: 'DISTINCTION IN ACADEMICS & CHARACTER',
            hero_title_1: 'โรงเรียนสว่างแดนดิน',
            hero_title_2: 'ผู้สมบูรณ์ด้วยวิชาและความประพฤติ',
            hero_desc: 'มุ่งมั่นจัดการศึกษาเพื่อพัฒนาเยาวชนอำเภอสว่างแดนดินให้มีความรู้คู่คุณธรรม สานพลังชุมชน และก้าวไกลสู่สากล',
            ai_bot_name: 'น้องสว่างแดนดิน AI',
            ai_welcome_text: 'สวัสดีครับ! ยินดีต้อนรับสู่โรงเรียนสว่างแดนดิน ผมคือ น้องสว่างแดนดิน AI สอบถามข้อมูลได้ตลอดเวลาครับ',
            footer_copyright: '© 2026 โรงเรียนสว่างแดนดิน (Sawangdaendin School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: น้ำเงิน - เหลือง | วิชฺชา จรณ สมฺปนฺโน'
        },
        'wnw': {
            badge: '🔥',
            school_name_th: 'โรงเรียนวานรนิวาสพิทยาสรรพ์',
            school_name_en: 'Wanonniwatpittayasun School',
            school_name_short: 'ว.พ.ส. • WNW',
            district: 'อำเภอวานรนิวาส',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'ฟ้า - แดง',
            theme_primary: '#7F1D1D',
            theme_primary_dark: '#450A0A',
            theme_secondary: '#0284C7',
            theme_secondary_dark: '#0369A1',
            theme_secondary_light: '#38BDF8',
            theme_gold: '#F59E0B',
            school_lat: '17.6272',
            school_lon: '103.7548',
            address: 'ตำบลวานรนิวาส อำเภอวานรนิวาส จังหวัดสกลนคร 47120',
            phone: '042-791-112',
            school_motto: 'ใฝ่หาความรู้ เชิดชูคุณธรรม นำการพัฒนา กีฬาเลิศล้ำ',
            school_philosophy: 'ปญฺญาว ธเนน เสยฺโย • ปัญญาแลประเสริฐกว่าทรัพย์',
            hero_badge: 'CREATIVE & INNOVATIVE ACADEMY',
            hero_title_1: 'โรงเรียนวานรนิวาสพิทยาสรรพ์',
            hero_title_2: 'ปัญญาแลประเสริฐกว่าทรัพย์ ก้าวสู่ความเป็นเลิศ',
            hero_desc: 'สร้างคนดี มีปัญญา มีทักษะในศตวรรษที่ 21 เชิดชูคุณธรรมและกีฬา ภายใต้รั้วฟ้า-แดงแห่งวานรนิวาส',
            ai_bot_name: 'น้องวานรพิทย์ AI',
            ai_welcome_text: 'สวัสดีครับ! น้องวานรพิทย์ AI ผู้ช่วยโรงเรียนวานรนิวาสพิทยาสรรพ์ ยินดีต้อนรับทุกท่านครับ',
            footer_copyright: '© 2026 โรงเรียนวานรนิวาสพิทยาสรรพ์ (Wanonniwatpittayasun School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: ฟ้า - แดง | ปญฺญาว ธเนน เสยฺโย'
        },
        'akn': {
            badge: '🍃',
            school_name_th: 'โรงเรียนอากาศอำนวยศึกษา',
            school_name_en: 'Akat Amnuay Suksa School',
            school_name_short: 'อ.ศ. • AKN',
            district: 'อำเภออากาศอำนวย',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'ชมพู - เขียว',
            theme_primary: '#064E3B',
            theme_primary_dark: '#022C22',
            theme_secondary: '#EC4899',
            theme_secondary_dark: '#DB2777',
            theme_secondary_light: '#F472B6',
            theme_gold: '#EAB308',
            school_lat: '17.6012',
            school_lon: '103.9921',
            address: 'ตำบลอากาศ อำเภออากาศอำนวย จังหวัดสกลนคร 47170',
            phone: '042-799-105',
            school_motto: 'วิชาการก้าวไกล วินัยเข้มแข็ง มีแหล่งเรียนรู้ เชิดชูสิ่งแวดล้อม',
            school_philosophy: 'สุขา สงฺฆสฺส สามคฺคี • ความพร้อมเพรียงของหมู่ทำให้เกิดสุข',
            hero_badge: 'GREEN & SMART LEARNING PARK',
            hero_title_1: 'โรงเรียนอากาศอำนวยศึกษา',
            hero_title_2: 'ความพร้อมเพรียงของหมู่ทำให้เกิดสุข สู่มาตรฐานสากล',
            hero_desc: 'มุ่งเน้นความเป็นเลิศทางวิชาการและวินัย ใส่ใจสิ่งแวดล้อมและพลังงานสะอาด ภายใต้รั้วชมพู-เขียว',
            ai_bot_name: 'น้องอากาศศึกษา AI',
            ai_welcome_text: 'สวัสดีครับ! ผมคือ น้องอากาศศึกษา AI ผู้ช่วยดิจิทัลโรงเรียนอากาศอำนวยศึกษา ยินดีต้อนรับครับ',
            footer_copyright: '© 2026 โรงเรียนอากาศอำนวยศึกษา (Akat Amnuay Suksa School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: ชมพู - เขียว | สุขา สงฺฆสฺส สามคฺคี'
        },
        'kud': {
            badge: '💜',
            school_name_th: 'โรงเรียนกุดบากพัฒนาศึกษา',
            school_name_en: 'Kudbak Phattana Suksa School',
            school_name_short: 'ก.พ.ศ. • KUD',
            district: 'อำเภอกุดบาก',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'ม่วง - ขาว',
            theme_primary: '#4C1D95',
            theme_primary_dark: '#2E1065',
            theme_secondary: '#A855F7',
            theme_secondary_dark: '#9333EA',
            theme_secondary_light: '#C084FC',
            theme_gold: '#EAB308',
            school_lat: '17.0812',
            school_lon: '103.8214',
            address: 'ตำบลกุดบาก อำเภอกุดบาก จังหวัดสกลนคร 47180',
            phone: '042-784-110',
            school_motto: 'รักเรียน มีวินัย ใฝ่คุณธรรม นำชุมชนพัฒนา',
            school_philosophy: 'อตฺตา หิ อตฺตโน นาโถ • ตนเป็นที่พึ่งแห่งตน',
            hero_badge: 'COMMUNITY & SECONDARY EXCELLENCE',
            hero_title_1: 'โรงเรียนกุดบากพัฒนาศึกษา',
            hero_title_2: 'ตนเป็นที่พึ่งแห่งตน พัฒนาคน พัฒนาชุมชน',
            hero_desc: 'สร้างคนดี มีคุณธรรม มีทักษะชีวิต ปลูกฝังอัตลักษณ์รักท้องถิ่นและสิ่งแวดล้อม ภายใต้รั้วม่วง-ขาว',
            ai_bot_name: 'น้องกุดบาก AI',
            ai_welcome_text: 'สวัสดีครับ! ยินดีต้อนรับสู่โรงเรียนกุดบากพัฒนาศึกษา ผมคือ น้องกุดบาก AI พร้อมให้บริการครับ',
            footer_copyright: '© 2026 โรงเรียนกุดบากพัฒนาศึกษา (Kudbak Phattana Suksa School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: ม่วง - ขาว | อตฺตา หิ อตฺตโน นาโถ'
        },
        'ksm': {
            badge: '🌊',
            school_name_th: 'โรงเรียนกุสุมาลย์วิทยาคม',
            school_name_en: 'Kusumanwittayakom School',
            school_name_short: 'ก.ส.ว. • KSM',
            district: 'อำเภอกุสุมาลย์',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'ฟ้า - ขาว',
            theme_primary: '#0C4A6E',
            theme_primary_dark: '#082F49',
            theme_secondary: '#0EA5E9',
            theme_secondary_dark: '#0284C7',
            theme_secondary_light: '#38BDF8',
            theme_gold: '#EAB308',
            school_lat: '17.3312',
            school_lon: '104.3412',
            address: 'ตำบลกุสุมาลย์ อำเภอกุสุมาลย์ จังหวัดสกลนคร 47210',
            phone: '042-769-120',
            school_motto: 'ประพฤติดี มีวิชา กีฬาเด่น เป็นคนดีของสังคม',
            school_philosophy: 'ธมฺโม หเว รกฺขติ ธมฺมจารึ • ธรรมย่อมรักษาผู้ประพฤติธรรม',
            hero_badge: 'MORAL & DIGITAL HORIZON ACADEMY',
            hero_title_1: 'โรงเรียนกุสุมาลย์วิทยาคม',
            hero_title_2: 'ธรรมย่อมรักษาผู้ประพฤติธรรม สู่การศึกษายุคใหม่',
            hero_desc: 'ยกระดับการเรียนรู้ด้วยเทคโนโลยีดิจิทัล ปลูกฝังคุณธรรมและวินัย ภายใต้รั้วฟ้า-ขาวแห่งกุสุมาลย์',
            ai_bot_name: 'น้องกุสุมาลย์ AI',
            ai_welcome_text: 'สวัสดีครับ! น้องกุสุมาลย์ AI ผู้ช่วยอัจฉริยะโรงเรียนกุสุมาลย์วิทยาคม ยินดีต้อนรับครับ',
            footer_copyright: '© 2026 โรงเรียนกุสุมาลย์วิทยาคม (Kusumanwittayakom School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: ฟ้า - ขาว | ธมฺโม หเว รกฺขติ ธมฺมจารึ'
        },
        'wrp': {
            badge: '❤️',
            school_name_th: 'โรงเรียนมัธยมวาริชภูมิ',
            school_name_en: 'Mattayom Waritchaphum School',
            school_name_short: 'ม.ว.ภ. • WRP',
            district: 'อำเภอวาริชภูมิ',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'แดง - ขาว',
            theme_primary: '#7F1D1D',
            theme_primary_dark: '#450A0A',
            theme_secondary: '#EF4444',
            theme_secondary_dark: '#DC2626',
            theme_secondary_light: '#F87171',
            theme_gold: '#F59E0B',
            school_lat: '17.2912',
            school_lon: '103.6312',
            address: 'ตำบลวาริชภูมิ อำเภอวาริชภูมิ จังหวัดสกลนคร 47150',
            phone: '042-781-140',
            school_motto: 'วินัยดี วิชาการเด่น เน้นคุณธรรม สัมพันธ์ชุมชน',
            school_philosophy: 'ปญฺญา นรานํ รตนํ • ปัญญาเป็นที่พึ่งของนรชน',
            hero_badge: 'WARITCHAPHUM DIGITAL PATHWAY',
            hero_title_1: 'โรงเรียนมัธยมวาริชภูมิ',
            hero_title_2: 'วินัยดี วิชาการเด่น เน้นคุณธรรม สัมพันธ์ชุมชน',
            hero_desc: 'มุ่งมั่นพัฒนาวิชาการและทักษะอาชีพ ปลูกฝังค่านิยมความรับผิดชอบ ภายใต้รั้วแดง-ขาว',
            ai_bot_name: 'น้องวาริชภูมิ AI',
            ai_welcome_text: 'สวัสดีครับ! ยินดีต้อนรับสู่โรงเรียนมัธยมวาริชภูมิ ผมคือ น้องวาริชภูมิ AI พร้อมให้บริการครับ',
            footer_copyright: '© 2026 โรงเรียนมัธยมวาริชภูมิ (Mattayom Waritchaphum School). All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: แดง - ขาว | ปญฺญา นรานํ รตนํ'
        },
        'ktk': {
            badge: '🔶',
            school_name_th: 'โรงเรียนคำตากล้าราชประชาสงเคราะห์',
            school_name_en: 'Kham Ta Kla Ratchaprachasongkhro School',
            school_name_short: 'ค.ร.ส. • KTK',
            district: 'อำเภอคำตากล้า',
            school_jurisdiction: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร (สพม.สกลนคร)',
            school_colors: 'ส้ม - น้ำเงิน',
            theme_primary: '#1E3A8A',
            theme_primary_dark: '#172554',
            theme_secondary: '#EA580C',
            theme_secondary_dark: '#C2410C',
            theme_secondary_light: '#FB923C',
            theme_gold: '#EAB308',
            school_lat: '17.8512',
            school_lon: '103.7612',
            address: 'ตำบลคำตากล้า อำเภอคำตากล้า จังหวัดสกลนคร 47250',
            phone: '042-796-115',
            school_motto: 'วิชาการก้าวไกล วินัยดีเด่น เน้นประชาธิปไตย ใส่ใจสิ่งแวดล้อม',
            school_philosophy: 'สุวิชาโน ภวํ โหติ • ผู้รู้ดีเป็นผู้เจริญ',
            hero_badge: 'NORTHERN BORDER EXCELLENCE',
            hero_title_1: 'โรงเรียนคำตากล้าราชประชาสงเคราะห์',
            hero_title_2: 'ผู้รู้ดีเป็นผู้เจริญ มุ่งสู่มาตรฐานระดับชาติ',
            hero_desc: 'สร้างโอกาสทางการศึกษา พัฒนาทักษะแห่งอนาคต ส่งเสริมสิ่งแวดล้อม ภายใต้รั้วส้ม-น้ำเงิน',
            ai_bot_name: 'น้องคำตากล้า AI',
            ai_welcome_text: 'สวัสดีครับ! ยินดีต้อนรับสู่โรงเรียนคำตากล้าราชประชาสงเคราะห์ ผมคือ น้องคำตากล้า AI ครับ',
            footer_copyright: '© 2026 โรงเรียนคำตากล้าราชประชาสงเคราะห์. All Rights Reserved.',
            footer_colors: 'สีประจำโรงเรียน: ส้ม - น้ำเงิน | สุวิชาโน ภวํ โหติ'
        },
        'wcs': {
            badge: '🌍',
            school_name_th: 'โรงเรียนมัธยมศึกษามาตรฐานสากล',
            school_name_en: 'World-Class Standard Secondary School',
            school_name_short: 'WCS • World-Class',
            district: 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา',
            school_jurisdiction: 'โครงการโรงเรียนมาตรฐานสากล (World-Class Standard School)',
            school_colors: 'กรมท่า - ทองจักรพรรดิ',
            theme_primary: '#0B192C',
            theme_primary_dark: '#040D1A',
            theme_secondary: '#EAB308',
            theme_secondary_dark: '#CA8A04',
            theme_secondary_light: '#FDE047',
            theme_gold: '#F59E0B',
            school_lat: '17.1500',
            school_lon: '104.1500',
            address: 'เครือข่ายโรงเรียนมัธยมศึกษามาตรฐานสากล สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน',
            phone: '042-700-000',
            school_motto: 'World-Class Excellence in Science, Technology & Humanity',
            school_philosophy: 'Knowledge, Integrity, and Global Leadership',
            hero_badge: 'WORLD-CLASS EDUCATION BLUEPRINT',
            hero_title_1: 'โรงเรียนมัธยมศึกษามาตรฐานสากล',
            hero_title_2: 'World-Class Standard School Platform 2026',
            hero_desc: 'หลักสูตรส่งเสริมพหุภาษา วิทยาศาสตร์ นวัตกรรม และปัญญาประดิษฐ์ (AI) เพื่อสร้างผู้นำการเปลี่ยนแปลงแห่งอนาคต',
            ai_bot_name: 'AI Global Assistant',
            ai_welcome_text: 'Welcome! I am your AI Global Assistant for World-Class Standard Secondary School.',
            footer_copyright: '© 2026 World-Class Standard School. All Rights Reserved.',
            footer_colors: 'School Colors: Imperial Navy - Gold | Global Leadership'
        }
    };

    function onSelectSchoolPreset(key) {
        var box = document.getElementById('schoolPresetPreviewBox');
        var btn = document.getElementById('btnApplySchoolPreset');
        if (!key || !SCHOOL_PRESETS[key]) {
            if (box) box.style.display = 'none';
            return;
        }

        var p = SCHOOL_PRESETS[key];
        if (box) box.style.display = 'block';

        document.getElementById('previewBadge').textContent = p.badge || '🏫';
        document.getElementById('previewSchoolName').textContent = p.school_name_th;
        document.getElementById('previewDistrict').textContent = p.district;
        document.getElementById('previewMotto').textContent = '“' + p.school_motto + '”';
        document.getElementById('previewColor1').style.background = p.theme_primary;
        document.getElementById('previewColor2').style.background = p.theme_secondary;
        document.getElementById('previewColorText').textContent = p.school_colors;
        document.getElementById('previewCoords').querySelector('span').textContent = p.school_lat + ', ' + p.school_lon + ' (' + p.district + ')';

        // Auto-fill active inputs in all tabs so user can see immediate response
        fillFormFieldsFromPreset(p);
    }

    function fillFormFieldsFromPreset(p) {
        for (var field in p) {
            if (field === 'badge' || field === 'district') continue;
            var el = document.getElementsByName(field)[0];
            if (el) el.value = p[field];

            // Also update color pickers
            var picker = document.getElementById('picker_' + field);
            if (picker) picker.value = p[field];
        }
    }

    function applySelectedSchoolPreset() {
        var sel = document.getElementById('spsQuickSchoolSelect');
        var key = sel ? sel.value : '';
        if (!key || !SCHOOL_PRESETS[key]) {
            alert('กรุณาคลิกเลือกชื่อโรงเรียนที่ต้องการแปลงโฉมในเมนูดรอปดาวน์ก่อนครับ');
            if (sel) sel.focus();
            return;
        }

        var p = SCHOOL_PRESETS[key];
        var confirmMsg = 'ยืนยันแปลงโฉมเว็บไซต์เป็น\n\n🏫 "' + p.school_name_th + '" (' + p.school_colors + ')\n\nระบบจะอัปเดตสีประจำโรงเรียน, สภาพอากาศดาวเทียม, คำขวัญ และ AI ประจำโรงเรียนทันที ใช่หรือไม่?';
        if (!confirm(confirmMsg)) return;

        var btn = document.getElementById('btnApplySchoolPreset');
        if (btn) {
            btn.disabled = true;
            btn.innerHTML = '<span>⏳ กำลังแปลงโฉมระบบ...</span>';
        }

        fillFormFieldsFromPreset(p);

        // Submit form via standard POST with nonce
        var form = document.querySelector('form');
        if (form) {
            // Append spm_save_settings indicator
            var hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'spm_save_settings';
            hidden.value = '1';
            form.appendChild(hidden);
            form.submit();
        } else {
            alert('ไม่พบฟอร์มการบันทึก');
        }
    }

    jQuery(document).ready(function($){
            // WordPress Media Library Modal Integration for Leadership Photos
            $('.spm-upload-media-btn').on('click', function(e){
                e.preventDefault();
                var btn = $(this);
                var targetInputId = btn.data('target');
                var previewImgId = btn.data('preview');

                if (typeof wp !== 'undefined' && wp.media) {
                    var customUploader = wp.media({
                        title: 'เลือกรูปภาพประจำตัวผู้บริหาร สพม.สกลนคร',
                        button: { text: 'ใช้รูปภาพนี้' },
                        multiple: false
                    }).on('select', function() {
                        var attachment = customUploader.state().get('selection').first().toJSON();
                        $('#' + targetInputId).val(attachment.url).trigger('input');
                        if (previewImgId) {
                            $('#' + previewImgId).attr('src', attachment.url);
                        }
                    }).open();
                } else {
                    var manualUrl = prompt('กรุณาวาง URL รูปภาพ:', $('#' + targetInputId).val());
                    if (manualUrl) {
                        $('#' + targetInputId).val(manualUrl).trigger('input');
                        if (previewImgId) {
                            $('#' + previewImgId).attr('src', manualUrl);
                        }
                    }
                }
            });

            // Live preview on manual URL input
            $('input[id$="_image"]').on('input change', function(){
                var val = $(this).val();
                var targetPreview = 'preview_' + $(this).attr('id');
                if (val) {
                    $('#' + targetPreview).attr('src', val);
                }
            });
        });

        function switchAdminTab(tabId, btn) {
        document.querySelectorAll('.spm-tab-btn').forEach(function(b) { b.classList.remove('active'); });
        document.querySelectorAll('.spm-tab-section').forEach(function(sec) { sec.classList.remove('active'); });
        if (btn) btn.classList.add('active');
        var target = document.getElementById(tabId);
        if (target) target.classList.add('active');
    }

    function applyThemePreset(preset) {
        var presets = {
            'spm_kram_gold': {
                primary: '#0F172A',
                primary_dark: '#060B19',
                secondary: '#EC4899',
                secondary_dark: '#DB2777',
                secondary_light: '#F472B6',
                gold: '#EAB308'
            },
            'navy_gold': {
                primary: '#0B192C',
                primary_dark: '#040D1A',
                secondary: '#EAB308',
                secondary_dark: '#CA8A04',
                secondary_light: '#FDE047',
                gold: '#F59E0B'
            },
            'emerald_white': {
                primary: '#064E3B',
                primary_dark: '#022C22',
                secondary: '#10B981',
                secondary_dark: '#059669',
                secondary_light: '#34D399',
                gold: '#F59E0B'
            },
            'crimson_gold': {
                primary: '#7F1D1D',
                primary_dark: '#450A0A',
                secondary: '#F59E0B',
                secondary_dark: '#D97706',
                secondary_light: '#FBBF24',
                gold: '#F59E0B'
            },
            'ocean_amber': {
                primary: '#0C4A6E',
                primary_dark: '#082F49',
                secondary: '#F97316',
                secondary_dark: '#EA580C',
                secondary_light: '#FB923C',
                gold: '#EAB308'
            },
            'royal_purple': {
                primary: '#4C1D95',
                primary_dark: '#2E1065',
                secondary: '#EAB308',
                secondary_dark: '#CA8A04',
                secondary_light: '#FDE047',
                gold: '#F59E0B'
            }
        };

        var p = presets[preset];
        if (!p) return;

        var mapping = {
            'theme_primary': p.primary,
            'theme_primary_dark': p.primary_dark,
            'theme_secondary': p.secondary,
            'theme_secondary_dark': p.secondary_dark,
            'theme_secondary_light': p.secondary_light,
            'theme_gold': p.gold
        };

        for (var key in mapping) {
            var input = document.getElementById('input_' + key);
            var picker = document.getElementById('picker_' + key);
            if (input) input.value = mapping[key];
            if (picker) picker.value = mapping[key];
        }

        alert('🎨 ปรับใช้ชุดสีสำเร็จรูปเรียบร้อยแล้ว! อย่าลืมกด "บันทึกข้อมูลทั้งหมด" ด้านล่าง');
    }

    function exportSchoolBlueprint() {
        fetch('/site/wp-json/spm/v1/settings')
            .then(function(res) { return res.json(); })
            .then(function(data) {
                var schoolAbbr = (data.school_name_short || 'school').replace(/[^a-zA-Z0-9]/g, '_');
                var filename = 'blueprint_' + schoolAbbr + '_' + (new Date().toISOString().slice(0, 10)) + '.json';
                var jsonStr = JSON.stringify(data, null, 2);
                var blob = new Blob([jsonStr], { type: 'application/json' });
                var url = URL.createObjectURL(blob);
                var a = document.createElement('a');
                a.href = url;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            })
            .catch(function(err) {
                alert('ไม่สามารถส่งออกพิมพ์เขียวได้: ' + err.message);
            });
    }

    function importSchoolBlueprint(event) {
        var file = event.target.files[0];
        if (!file) return;

        var reader = new FileReader();
        reader.onload = function(e) {
            try {
                var data = JSON.parse(e.target.result);
                if (typeof data !== 'object') throw new Error('Invalid JSON structure');

                var count = 0;
                for (var key in data) {
                    var el = document.getElementsByName(key)[0];
                    if (el) {
                        if (el.type === 'checkbox') {
                            el.checked = (data[key] === '1' || data[key] === true);
                        } else {
                            el.value = data[key];
                        }
                        var picker = document.getElementById('picker_' + key);
                        if (picker) picker.value = data[key];
                        count++;
                    }
                }

                alert('✅ นำเข้าข้อมูลพิมพ์เขียวเรียบร้อยแล้ว (' + count + ' รายการ) กรุณาตรวจสอบข้อมูลและกด "บันทึกข้อมูลทั้งหมด" ด้านล่างเพื่ออัปเดตหน้าเว็บจริง');
            } catch (err) {
                alert('เกิดข้อผิดพลาดในการอ่านไฟล์ JSON: ' + err.message);
            }
        };
        reader.readAsText(file);
    }

    function loadSampleBlueprint(type) {
        var sample = {};
        if (type === 'spm_large') {
            sample = {
                'school_name_th': 'โรงเรียนมัธยมวิทยาการ สพม.',
                'school_name_en': 'Secondary Academic Excellence School',
                'school_name_short': 'ม.ว.ก. • SPM',
                'top_ticker_org': 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา',
                'hero_badge': 'SMART SECONDARY EDUCATION BLUEPRINT',
                'hero_title_1': 'โรงเรียนมัธยมศึกษาต้นแบบคุณภาพ',
                'hero_title_2': 'มุ่งมั่นพัฒนาวิชาการ ก้าวทันเทคโนโลยีศตวรรษที่ 21',
                'hero_desc': 'โรงเรียนมัธยมศึกษาชั้นนำ มุ่งเน้นการจัดการเรียนรู้มาตรฐานสากล พัฒนาผู้เรียนให้มีความเป็นเลิศทางวิชาการ มีคุณธรรมจริยธรรม และทักษะชีวิต',
                'school_motto': 'ก้าวสู่ความเป็นเลิศ ทางวิชาการ เทคโนโลยี และสิ่งแวดล้อม',
                'school_philosophy': 'ปญฺญา นรานํ รตนํ • ปัญญาเป็นที่พึ่งของนรชน'
            };
            applyThemePreset('navy_gold');
        } else if (type === 'world_class') {
            sample = {
                'school_name_th': 'โรงเรียนมัธยมศึกษามาตรฐานสากล',
                'school_name_en': 'World-Class Standard Secondary School',
                'school_name_short': 'WCS • World-Class',
                'top_ticker_org': 'โครงการโรงเรียนมาตรฐานสากล (World-Class Standard School)',
                'hero_badge': 'WORLD-CLASS EDUCATION PLATFORM',
                'hero_title_1': 'มุ่งสู่มาตรฐานสากลระดับโลก',
                'hero_title_2': 'World-Class Standard School 2026',
                'hero_desc': 'หลักสูตรส่งเสริมพหุภาษา วิทยาศาสตร์ นวัตกรรม และ AI เพื่อสร้างผู้นำการเปลี่ยนแปลงแห่งอนาคต',
                'school_motto': 'World-Class Excellence in Science, Technology & Humanity',
                'school_philosophy': 'Knowledge, Integrity, and Global Leadership'
            };
            applyThemePreset('ocean_amber');
        } else if (type === 'spp_primary') {
            sample = {
                'school_name_th': 'โรงเรียนอนุบาลและประถมศึกษาชุมชน',
                'school_name_en': 'Community Primary & Kindergarten School',
                'school_name_short': 'อ.ป.ช. • Primary',
                'top_ticker_org': 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษา (สพป.)',
                'hero_badge': 'PRIMARY LEARNING ECOSYSTEM',
                'hero_title_1': 'โรงเรียนเพื่อชุมชนและเยาวชน',
                'hero_title_2': 'เรียนรู้อย่างมีความสุข ปลูกฝังคุณธรรม',
                'hero_desc': 'มุ่งพัฒนาเด็กปฐมวัยและประถมศึกษาให้มีความรู้คู่คุณธรรม มีทักษะชีวิต สุขภาพแข็งแรง และเติบโตอย่างมีคุณภาพ',
                'school_motto': 'เรียนดี กีฬาเด่น เน้นคุณธรรม สัมพันธ์ชุมชน',
                'school_philosophy': 'สุโข ปญฺญา ปฏิลาโภ • ความได้ปัญญา นำมาซึ่งความสุข'
            };
            applyThemePreset('emerald_white');
        }

        for (var key in sample) {
            var el = document.getElementsByName(key)[0];
            if (el) el.value = sample[key];
        }
        alert('📋 โหลดข้อมูลพิมพ์เขียวต้นแบบเรียบร้อยแล้ว! กรุณาตรวจสอบและกด "บันทึกข้อมูลทั้งหมด" ด้านล่าง');
    }
    </script>
    <?php
}

// =========================================================================
// 5. LUXURY SINGLE POST TEMPLATE INTERCEPTOR (MATCHING SPS PORTAL AESTHETIC)
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
    if (!$thumb) {
        $thumb = 'https://sesaosakon.go.th/site/wp-content/uploads/2026/10/logoSPS.jpg';
    }
    
    $cats = get_the_category($post_id);
    $cat_name = !empty($cats) ? $cats[0]->name : 'ข่าวประชาสัมพันธ์';
    $cat_slug = !empty($cats) ? $cats[0]->slug : 'news';
    $permalink = get_permalink($post_id);
    $s = spm_get_settings();

    // Related posts
    $related = get_posts(array(
        'posts_per_page' => 3,
        'post__not_in' => array($post_id),
        'post_status' => 'publish'
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
    <meta property="og:site_name" content="สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร">
    
    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=K2D:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --navy-950: #0F172A;
            --navy-900: #1E293B;
            --slate-800: #1E293B;
            --slate-700: #334155;
            --slate-600: #475569;
            --slate-500: #64748B;
            --slate-200: #E2E8F0;
            --slate-100: #F1F5F9;
            --slate-50: #F8FAFC;
            --kram-800: #1E3A8A;
            --kram-700: #1E40AF;
            --gold-500: #ECC86A;
            --gold-100: #FFFBEB;
            --gold-500: #F59E0B;
            --gold-400: #FBBF24;
            --emerald-500: #10B981;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Google Sans', 'K2D', sans-serif;
            background: #F8FAFC;
            color: #1E293B;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        /* Top Ticker Bar */
        .top-ticker {
            background: #090D16;
            color: #94A3B8;
            font-size: 12px;
            padding: 7px 0;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .ticker-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }
        .ticker-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: linear-gradient(135deg, #1E40AF 0%, #1E3A8A 100%);
            color: #FFFFFF;
            padding: 2px 8px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
        }

        /* Sticky Glass Navbar */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 999;
            background: rgba(15, 23, 42, 0.94);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding: 12px 0;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .nav-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }
        .brand-logo {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(145deg, #12399E 0%, #060B19 100%);
            border: 1.5px solid #ECC86A;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ECC86A;
            font-size: 20px;
            box-shadow: 0 4px 14px rgba(236, 200, 106, 0.25);
        }
        .brand-text h1 {
            color: #FFFFFF;
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
        }
        .brand-text span {
            color: #94A3B8;
            font-size: 11px;
            font-weight: 400;
            display: block;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 18px;
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
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-portal {
            background: linear-gradient(135deg, #1E40AF 0%, #1E3A8A 100%);
            color: #FFFFFF !important;
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 12.5px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 4px 12px rgba(236,72,153,0.35);
        }

        /* Reading Progress Bar */
        .progress-bar-wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            z-index: 1000;
            background: transparent;
        }
        .progress-bar-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #1E40AF, #ECC86A);
            transition: width 0.1s;
        }

        /* Article Container */
        .article-hero {
            background: linear-gradient(180deg, #0F172A 0%, #1E293B 100%);
            color: #FFFFFF;
            padding: 45px 0 65px 0;
            position: relative;
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
        .breadcrumb span {
            color: #64748B;
        }
        .article-cat-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(236, 72, 153, 0.2);
            border: 1px solid rgba(236, 72, 153, 0.4);
            color: #ECC86A;
            padding: 4px 14px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 14px;
        }
        .article-title {
            font-size: clamp(24px, 4vw, 36px);
            font-weight: 700;
            color: #FFFFFF;
            line-height: 1.35;
            margin-bottom: 18px;
        }
        .article-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 13px;
            color: #94A3B8;
            flex-wrap: wrap;
        }
        .article-meta span {
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Main Content Box */
        .article-body-wrap {
            max-width: 880px;
            margin: -35px auto 60px auto;
            position: relative;
            z-index: 10;
            padding: 0 20px;
        }
        .article-card {
            background: #FFFFFF;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
            border: 1px solid #E2E8F0;
        }
        .article-thumb-img {
            width: 100%;
            max-height: 480px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        }
        .article-content {
            font-family: 'Google Sans', 'K2D', sans-serif;
            font-size: 18px;
            line-height: 1.9;
            color: #334155;
        }
        .article-content p {
            margin-bottom: 20px;
        }
        .article-content h2, .article-content h3 {
            font-family: 'Google Sans', 'K2D', sans-serif;
            color: #0F172A;
            margin: 35px 0 16px 0;
            line-height: 1.3;
        }
        .article-content h2 {
            font-size: 24px;
            border-left: 4px solid #ECC86A;
            padding-left: 14px;
        }
        .article-content h3 {
            font-size: 20px;
        }
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }
        .article-content blockquote {
            border-left: 4px solid #F59E0B;
            background: #FFFBEB;
            padding: 16px 22px;
            border-radius: 0 12px 12px 0;
            margin: 25px 0;
            color: #92400E;
            font-style: italic;
        }

        /* Share & Action Bar */
        .article-footer-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 30px;
            margin-top: 40px;
            border-top: 1px solid #E2E8F0;
            flex-wrap: wrap;
            gap: 16px;
        }
        .share-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .share-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            color: #FFFFFF;
            cursor: pointer;
            border: none;
            transition: transform 0.2s;
        }
        .share-btn:hover {
            transform: translateY(-2px);
        }
        .share-fb { background: #1877F2; }
        .share-line { background: #06C755; }
        .share-copy { background: #475569; }

        .btn-back-home {
            background: #F1F5F9;
            color: #0F172A;
            border: 1px solid #CBD5E1;
            padding: 10px 22px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }
        .btn-back-home:hover {
            background: #0F172A;
            color: #FFFFFF;
            border-color: #0F172A;
        }

        /* Related News Section */
        .related-sec {
            margin-top: 40px;
        }
        .related-title {
            font-size: 20px;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .related-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .related-card {
            background: #FFFFFF;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #E2E8F0;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .related-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.06);
        }
        .related-thumb {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .related-content {
            padding: 16px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .related-card-title {
            font-size: 14px;
            font-weight: 600;
            color: #0F172A;
            line-height: 1.4;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .related-card-date {
            font-size: 12px;
            color: #64748B;
            margin-top: auto;
        }

        /* Footer */
        .footer {
            background: #090D16;
            color: #94A3B8;
            padding: 60px 0 30px 0;
            border-top: 1px solid rgba(255,255,255,0.08);
            margin-top: 80px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer h4 {
            color: #FFFFFF;
            font-size: 16px;
            margin-bottom: 16px;
        }
        .footer p {
            font-size: 13.5px;
            margin-bottom: 8px;
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
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,0.06);
            font-size: 12px;
            color: #64748B;
        }

        /* AI Floating Widget */
        .ai-floating-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
            border: 1px solid rgba(236,72,153,0.4);
            color: #FFFFFF;
            padding: 10px 18px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            z-index: 990;
            font-size: 13px;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .ai-floating-btn:hover {
            transform: scale(1.04);
            border-color: #ECC86A;
        }
        .ai-pulse-dot {
            width: 8px;
            height: 8px;
            background: #ECC86A;
            border-radius: 50%;
            box-shadow: 0 0 8px #ECC86A;
        }

        @media (max-width: 900px) {
            .nav-links { display: none; }
            .article-card { padding: 25px; }
            .related-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Reading Progress Indicator -->
    <div class="progress-bar-wrap">
        <div class="progress-bar-fill" id="readingProgress"></div>
    </div>

    <!-- 1. Top Ticker -->
    <div class="top-ticker">
        <div class="container ticker-wrap">
            <div>
                <span class="ticker-badge" style="background: linear-gradient(135deg, #1E293B 0%, #334155 100%); border: 1px solid rgba(255,255,255,0.15);"><i class="fa-solid fa-graduation-cap" style="color: #ECC86A;"></i> สพม.สกลนคร</span>
                <span style="color: #CBD5E1; font-weight: 500;">สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร • ข่าวสารและประกาศทางการ</span>
            </div>
            <div>
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $s['phone'])); ?>" style="color: inherit; text-decoration: none;">
                    <i class="fa-solid fa-phone"></i> <?php echo esc_html($s['phone']); ?>
                </a>
            </div>
        </div>
    </div>

    <!-- 2. Sticky Glass Navbar -->
    <nav class="navbar">
        <div class="container nav-wrap">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand">
                <div class="brand-logo"><i class="fa-solid fa-graduation-cap"></i></div>
                <div class="brand-text">
                    <h1>สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร</h1>
                    <span>ประตูสู่การเรียนรู้ดิจิทัล • SPM Smart Portal (สพม.สกลนคร)</span>
                </div>
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house"></i> หน้าแรก</a></li>
                <li><a href="<?php echo esc_url(home_url('/ita/')); ?>">ITA โปร่งใส</a></li>
                <li><a href="<?php echo esc_url(home_url('/e-service/')); ?>">e-Service</a></li>
                <li><a href="<?php echo esc_url(home_url('/curriculum/')); ?>">หลักสูตร</a></li>
                <li><a href="<?php echo esc_url(home_url('/calendar/')); ?>">ปฏิทิน</a></li>
                <li><a href="<?php echo esc_url(home_url('/downloads/')); ?>">ดาวน์โหลด</a></li>
            </ul>
            <div class="nav-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-portal">
                    <i class="fa-solid fa-arrow-left"></i> กลับสู่พอร์ทัล
                </a>
            </div>
        </div>
    </nav>

    <!-- 3. Article Hero Section -->
    <header class="article-hero">
        <div class="container" style="max-width: 880px;">
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house"></i> หน้าแรก</a>
                <span>/</span>
                <a href="<?php echo esc_url(home_url('/#news')); ?>">ข่าวประชาสัมพันธ์</a>
                <span>/</span>
                <span style="color: #ECC86A;"><?php echo esc_html($cat_name); ?></span>
            </div>

            <div class="article-cat-badge">
                <i class="fa-solid fa-tag"></i> <?php echo esc_html($cat_name); ?>
            </div>

            <h1 class="article-title"><?php echo esc_html($title); ?></h1>

            <div class="article-meta">
                <span><i class="fa-regular fa-calendar" style="color: #ECC86A;"></i> <?php echo esc_html($date_thai); ?></span>
                <span><i class="fa-solid fa-school" style="color: #60A5FA;"></i> สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร</span>
                <span><i class="fa-regular fa-clock" style="color: #FBBF24;"></i> อ่าน ~2 นาที</span>
            </div>
        </div>
    </header>

    <!-- 4. Main Article Content Body -->
    <main class="article-body-wrap">
        <article class="article-card">
            <?php if ($thumb): ?>
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" class="article-thumb-img">
            <?php endif; ?>

            <div class="article-content">
                <?php echo $content; ?>
            </div>

            <!-- Footer Share Bar -->
            <div class="article-footer-bar">
                <a href="<?php echo esc_url(home_url('/#news')); ?>" class="btn-back-home">
                    <i class="fa-solid fa-arrow-left"></i> กลับไปหน้ารวมข่าวสาร
                </a>

                <div class="share-group">
                    <span style="font-size: 13px; font-weight: 600; color: #64748B;">แชร์ข่าวนี้:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($permalink); ?>" target="_blank" class="share-btn share-fb">
                        <i class="fa-brands fa-facebook"></i> Facebook
                    </a>
                    <a href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode($permalink); ?>" target="_blank" class="share-btn share-line">
                        <i class="fa-brands fa-line"></i> LINE
                    </a>
                    <button onclick="navigator.clipboard.writeText('<?php echo esc_js($permalink); ?>'); alert('คัดลอกลิงก์ข่าวเรียบร้อยแล้ว!');" class="share-btn share-copy">
                        <i class="fa-solid fa-link"></i> คัดลอกลิงก์
                    </button>
                </div>
            </div>
        </article>

        <!-- 5. Related Articles -->
        <?php if (!empty($related)): ?>
        <section class="related-sec">
            <h3 class="related-title"><i class="fa-solid fa-newspaper" style="color: #ECC86A;"></i> ข่าวสารและประกาศอื่นๆ</h3>
            <div class="related-grid">
                <?php foreach ($related as $rel_post): 
                    $rel_thumb = get_the_post_thumbnail_url($rel_post->ID, 'medium');
                    if (!$rel_thumb) $rel_thumb = 'https://sesaosakon.go.th/site/wp-content/uploads/2026/10/logoSPS.jpg';
                    $rel_date = spm_format_thai_date_full(strtotime($rel_post->post_date));
                ?>
                <a href="<?php echo esc_url(get_permalink($rel_post->ID)); ?>" class="related-card">
                    <img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php echo esc_attr($rel_post->post_title); ?>" class="related-thumb">
                    <div class="related-content">
                        <h4 class="related-card-title"><?php echo esc_html($rel_post->post_title); ?></h4>
                        <span class="related-card-date"><i class="fa-regular fa-calendar"></i> <?php echo esc_html($rel_date); ?></span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
    </main>

    <!-- 6. Official SPS Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4 style="display: flex; align-items: center; gap: 8px;">
                        <span style="color: #ECC86A;">สพม.สกลนคร</span> สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร
                    </h4>
                    <p><?php echo esc_html($s['address']); ?></p>
                    <p><i class="fa-solid fa-phone" style="color: #ECC86A;"></i> โทรศัพท์: <?php echo esc_html($s['phone']); ?> | โทรสาร: <?php echo esc_html($s['fax']); ?></p>
                    <p><i class="fa-solid fa-envelope" style="color: #ECC86A;"></i> อีเมล: <?php echo esc_html($s['email']); ?></p>
                </div>
                <div>
                    <h4>ลิงก์ด่วน</h4>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>">หน้าแรกพอร์ทัล</a></p>
                    <p><a href="<?php echo esc_url(home_url('/e-service/')); ?>">ยื่นคำร้อง e-Service</a></p>
                    <p><a href="<?php echo esc_url(home_url('/ita/')); ?>">ศูนย์ข้อมูล ITA</a></p>
                    <p><a href="<?php echo esc_url(home_url('/calendar/')); ?>">ปฏิทินวิชาการ</a></p>
                </div>
                <div>
                    <h4>ติดตามเรา</h4>
                    <p><a href="<?php echo esc_url($s['facebook_url']); ?>" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook Page</a></p>
                    <p><i class="fa-brands fa-line"></i> LINE Official: <?php echo esc_html($s['line_id']); ?></p>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo (int)date('Y') + 543; ?> สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาสกลนคร. สงวนลิขสิทธิ์ทุกประการ. ประตูสู่การเรียนรู้ดิจิทัล (SPM Smart Portal (สพม.สกลนคร))
            </div>
        </div>
    </footer>

    <!-- AI Concierge Floating Button -->
    <a href="<?php echo esc_url(home_url('/#news')); ?>" class="ai-floating-btn" title="กลับสู่หน้าแรกเพื่อสอบถามน้องภูพาน AI AI">
        <span class="ai-pulse-dot"></span>
        <i class="fa-solid fa-robot" style="color: #ECC86A;"></i>
        <span>น้องภูพาน AI AI ประจำการ</span>
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



/* ==========================================================================
   MODULE: SPM PORTAL COMPREHENSIVE CRUD ENGINE (5 ESSENTIAL MODULES)
   1. คลังหนังสือราชการและคำสั่งเขต (spm_circular)
   2. ปฏิทินปฏิบัติงานและกิจกรรม (spm_calendar)
   3. ศูนย์ดาวน์โหลดแบบฟอร์ม 9 กลุ่ม 1 หน่วย (spm_download)
   4. หอเชิดชูเกียรติ & เกียรติบัตรดิจิทัล (spm_certificate)
   5. ศูนย์เฝ้าระวังความปลอดภัย MOE Safety (spm_safety)
   ========================================================================== */

// 1. REGISTER CUSTOM POST TYPES
add_action('init', 'spm_register_portal_cpts');
function spm_register_portal_cpts() {
    // 1.1 คลังหนังสือราชการและคำสั่งเขต
    register_post_type('spm_circular', array(
        'labels' => array(
            'name' => 'คลังหนังสือราชการ',
            'singular_name' => 'หนังสือราชการ',
            'add_new' => 'เพิ่มหนังสือราชการใหม่',
            'add_new_item' => 'เพิ่มหนังสือราชการ / คำสั่งเขต',
            'edit_item' => 'แก้ไขหนังสือราชการ',
            'all_items' => 'หนังสือราชการทั้งหมด',
            'search_items' => 'ค้นหาหนังสือราชการ',
            'menu_name' => 'คลังหนังสือราชการ'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-media-document',
        'menu_position' => 21,
        'supports' => array('title', 'editor')
    ));

    // 1.2 ปฏิทินปฏิบัติงานและกิจกรรม
    register_post_type('spm_calendar', array(
        'labels' => array(
            'name' => 'ปฏิทินปฏิบัติงาน',
            'singular_name' => 'กิจกรรมปฏิทิน',
            'add_new' => 'เพิ่มกิจกรรมใหม่',
            'add_new_item' => 'เพิ่มกิจกรรมลงในปฏิทินงาน',
            'edit_item' => 'แก้ไขกิจกรรม',
            'all_items' => 'กิจกรรมทั้งหมด',
            'search_items' => 'ค้นหากิจกรรม',
            'menu_name' => 'ปฏิทินปฏิบัติงาน'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'menu_position' => 22,
        'supports' => array('title', 'editor')
    ));

    // 1.3 ศูนย์ดาวน์โหลดแบบฟอร์ม 9 กลุ่ม 1 หน่วย
    register_post_type('spm_download', array(
        'labels' => array(
            'name' => 'ศูนย์ดาวน์โหลดแบบฟอร์ม',
            'singular_name' => 'แบบฟอร์มเอกสาร',
            'add_new' => 'เพิ่มแบบฟอร์มใหม่',
            'add_new_item' => 'เพิ่มแบบฟอร์มดาวน์โหลด',
            'edit_item' => 'แก้ไขแบบฟอร์ม',
            'all_items' => 'แบบฟอร์มทั้งหมด (9 กลุ่ม 1 หน่วย)',
            'search_items' => 'ค้นหาแบบฟอร์ม',
            'menu_name' => 'ศูนย์ดาวน์โหลด'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-download',
        'menu_position' => 23,
        'supports' => array('title')
    ));

    // 1.4 หอเชิดชูเกียรติ & เกียรติบัตรดิจิทัล
    register_post_type('spm_certificate', array(
        'labels' => array(
            'name' => 'เกียรติบัตร & หอเกียรติยศ',
            'singular_name' => 'เกียรติบัตร',
            'add_new' => 'เพิ่มเกียรติบัตร / รางวัล',
            'add_new_item' => 'เพิ่มเกียรติบัตรดิจิทัลใหม่',
            'edit_item' => 'แก้ไขข้อมูลเกียรติบัตร',
            'all_items' => 'เกียรติบัตรและผลงานทั้งหมด',
            'search_items' => 'ค้นหาเกียรติบัตร / รหัส Cert ID',
            'menu_name' => 'เกียรติบัตร & รางวัล'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-awards',
        'menu_position' => 24,
        'supports' => array('title')
    ));

    // 1.5 ศูนย์เฝ้าระวังความปลอดภัย MOE Safety
    register_post_type('spm_safety', array(
        'labels' => array(
            'name' => 'ศูนย์ความปลอดภัย MOE',
            'singular_name' => 'ข้อมูลความปลอดภัย',
            'add_new' => 'เพิ่มมาตรการ / ข้อมูลความปลอดภัย',
            'add_new_item' => 'เพิ่มข้อมูลศูนย์ความปลอดภัย',
            'edit_item' => 'แก้ไขข้อมูลความปลอดภัย',
            'all_items' => 'มาตรการ & เครือข่ายทั้งหมด',
            'search_items' => 'ค้นหาข้อมูลความปลอดภัย',
            'menu_name' => 'ศูนย์ความปลอดภัย'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-shield',
        'menu_position' => 25,
        'supports' => array('title', 'editor')
    ));
}

// 2. ENQUEUE MEDIA UPLOADER ON CPT POST EDIT SCREENS
add_action('admin_enqueue_scripts', 'spm_portal_cpts_admin_assets');
function spm_portal_cpts_admin_assets($hook) {
    global $post_type;
    $portal_cpts = array('spm_circular', 'spm_calendar', 'spm_download', 'spm_certificate', 'spm_safety');
    if (in_array($post_type, $portal_cpts)) {
        wp_enqueue_media();
        wp_enqueue_style('spm-cpt-admin-style', false);
        wp_add_inline_style('spm-cpt-admin-style', '
            .spm-meta-box-wrap { padding: 8px 0; font-family: system-ui, -apple-system, sans-serif; }
            .spm-meta-row { margin-bottom: 16px; }
            .spm-meta-label { display: block; font-weight: 700; margin-bottom: 6px; color: #0F172A; font-size: 13.5px; }
            .spm-meta-desc { font-size: 12px; color: #64748B; margin-top: 4px; }
            .spm-meta-input, .spm-meta-select { width: 100%; max-width: 600px; padding: 8px 12px; border: 1px solid #CBD5E1; border-radius: 6px; font-size: 14px; }
            .spm-meta-input:focus, .spm-meta-select:focus { border-color: #0284C7; outline: none; box-shadow: 0 0 0 3px rgba(2,132,199,0.15); }
            .spm-meta-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; max-width: 600px; }
            @media (max-width: 600px) { .spm-meta-grid-2 { grid-template-columns: 1fr; } }
            .spm-meta-btn-upload { background: #0B132B !important; color: #ECC86A !important; border: 1px solid #D4AF37 !important; font-weight: 700 !important; padding: 6px 14px !important; border-radius: 6px !important; cursor: pointer !important; }
            .spm-meta-btn-upload:hover { background: #1C2541 !important; }
        ');
    }
}

// 3. REGISTER META BOXES FOR ALL 5 CPTS
add_action('add_meta_boxes', 'spm_register_all_portal_meta_boxes');
function spm_register_all_portal_meta_boxes() {
    // 3.1 Circular Meta Box
    add_meta_box('spm_circular_details', '📄 ข้อมูลหนังสือราชการและไฟล์แนบ', 'spm_render_circular_meta_box', 'spm_circular', 'normal', 'high');

    // 3.2 Calendar Meta Box
    add_meta_box('spm_calendar_details', '📅 กำหนดการและรายละเอียดกิจกรรม', 'spm_render_calendar_meta_box', 'spm_calendar', 'normal', 'high');

    // 3.3 Download Meta Box
    add_meta_box('spm_download_details', '📥 รายละเอียดแบบฟอร์มและไฟล์ดาวน์โหลด', 'spm_render_download_meta_box', 'spm_download', 'normal', 'high');

    // 3.4 Certificate Meta Box
    add_meta_box('spm_certificate_details', '🏆 ข้อมูลเกียรติบัตรและผู้ได้รับรางวัล', 'spm_render_certificate_meta_box', 'spm_certificate', 'normal', 'high');

    // 3.5 Safety Meta Box
    add_meta_box('spm_safety_details', '🛡️ รายละเอียดมาตรการและเครือข่ายความปลอดภัย', 'spm_render_safety_meta_box', 'spm_safety', 'normal', 'high');
}

// 9 กลุ่ม 1 หน่วย Helper Options
function spm_get_dept_list() {
    return array(
        'กลุ่มอำนวยการ',
        'กลุ่มบริหารงานบุคคล',
        'กลุ่มนโยบายและแผน',
        'กลุ่มส่งเสริมการศึกษาทางไกลฯ (DLICT)',
        'กลุ่มนิเทศ ติดตามฯ',
        'กลุ่มส่งเสริมการจัดการศึกษา',
        'กลุ่มบริหารงานการเงินและสินทรัพย์',
        'กลุ่มพัฒนาครูและบุคลากรฯ',
        'กลุ่มกฎหมายและคดี',
        'หน่วยตรวจสอบภายใน'
    );
}

// 3.1 RENDER CIRCULAR META BOX
function spm_render_circular_meta_box($post) {
    wp_nonce_field('spm_save_meta_box', 'spm_meta_nonce');
    $doc_number = get_post_meta($post->ID, '_spm_doc_number', true) ?: 'ศธ 04228/ว ' . rand(1000, 9999);
    $doc_date = get_post_meta($post->ID, '_spm_doc_date', true) ?: date('d/m/') . (date('Y') + 543);
    $doc_type = get_post_meta($post->ID, '_spm_doc_type', true) ?: 'หนังสือเวียน';
    $doc_urgency = get_post_meta($post->ID, '_spm_doc_urgency', true) ?: 'normal';
    $doc_dept = get_post_meta($post->ID, '_spm_doc_dept', true) ?: 'กลุ่มอำนวยการ';
    $doc_file = get_post_meta($post->ID, '_spm_doc_file', true) ?: '';
    $depts = spm_get_dept_list();
    ?>
    <div class="spm-meta-box-wrap">
        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">เลขที่หนังสือ / คำสั่ง:</label>
                <input type="text" name="spm_doc_number" value="<?php echo esc_attr($doc_number); ?>" class="spm-meta-input" placeholder="เช่น ศธ 04228/ว 1845">
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">วันที่ลงนาม / วันที่ประกาศ:</label>
                <input type="text" name="spm_doc_date" value="<?php echo esc_attr($doc_date); ?>" class="spm-meta-input" placeholder="เช่น 28 ต.ค. 2569">
            </div>
        </div>

        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">ประเภทเอกสาร:</label>
                <select name="spm_doc_type" class="spm-meta-select">
                    <option value="หนังสือเวียน" <?php selected($doc_type, 'หนังสือเวียน'); ?>>หนังสือเวียน (ว.)</option>
                    <option value="คำสั่งเขต" <?php selected($doc_type, 'คำสั่งเขต'); ?>>คำสั่ง สพม.สกลนคร</option>
                    <option value="ประกาศ" <?php selected($doc_type, 'ประกาศ'); ?>>ประกาศทางการ</option>
                </select>
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">ระดับความเร่งด่วน:</label>
                <select name="spm_doc_urgency" class="spm-meta-select">
                    <option value="normal" <?php selected($doc_urgency, 'normal'); ?>>ปกติ (Normal)</option>
                    <option value="urgent" <?php selected($doc_urgency, 'urgent'); ?>>⚡ ด่วนที่สุด (Urgent)</option>
                </select>
            </div>
        </div>

        <div class="spm-meta-row">
            <label class="spm-meta-label">กลุ่มงานเจ้าของเรื่อง (9 กลุ่ม 1 หน่วย):</label>
            <select name="spm_doc_dept" class="spm-meta-select">
                <?php foreach ($depts as $d): ?>
                    <option value="<?php echo esc_attr($d); ?>" <?php selected($doc_dept, $d); ?>><?php echo esc_html($d); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="spm-meta-row">
            <label class="spm-meta-label">ไฟล์แนบเอกสาร (PDF):</label>
            <div style="display:flex; gap:8px; max-width:600px;">
                <input type="text" id="spm_doc_file" name="spm_doc_file" value="<?php echo esc_attr($doc_file); ?>" class="spm-meta-input" placeholder="https://... หรืออัปโหลดไฟล์">
                <button type="button" class="button spm-meta-btn-upload spm-cpt-upload-btn" data-target="spm_doc_file">📁 เลือกไฟล์ PDF</button>
            </div>
            <div class="spm-meta-desc">คลิกปุ่มเพื่อเลือกหรืออัปโหลดไฟล์ PDF จาก WordPress Media Library</div>
        </div>
    </div>
    <?php
}

// 3.2 RENDER CALENDAR META BOX
function spm_render_calendar_meta_box($post) {
    wp_nonce_field('spm_save_meta_box', 'spm_meta_nonce');
    $event_date = get_post_meta($post->ID, '_spm_event_date', true) ?: date('Y-m-d');
    $event_time = get_post_meta($post->ID, '_spm_event_time', true) ?: '09:00 - 16:30 น.';
    $event_location = get_post_meta($post->ID, '_spm_event_location', true) ?: 'หอประชุมรวมใจ สพม.สกลนคร';
    $event_dept = get_post_meta($post->ID, '_spm_event_dept', true) ?: 'กลุ่มอำนวยการ';
    $event_type = get_post_meta($post->ID, '_spm_event_type', true) ?: 'academic';
    $event_color = get_post_meta($post->ID, '_spm_event_color', true) ?: '#ECC86A';
    $depts = spm_get_dept_list();
    ?>
    <div class="spm-meta-box-wrap">
        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">วันที่จัดกิจกรรม (Date):</label>
                <input type="date" name="spm_event_date" value="<?php echo esc_attr($event_date); ?>" class="spm-meta-input">
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">เวลาดำเนินกิจกรรม (Time):</label>
                <input type="text" name="spm_event_time" value="<?php echo esc_attr($event_time); ?>" class="spm-meta-input" placeholder="เช่น 08:30 - 16:30 น.">
            </div>
        </div>

        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">สถานที่จัดกิจกรรม / ช่องทาง:</label>
                <input type="text" name="spm_event_location" value="<?php echo esc_attr($event_location); ?>" class="spm-meta-input" placeholder="เช่น หอประชุม สพม. หรือ ออนไลน์ Zoom">
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">หมวดหมู่กิจกรรม:</label>
                <select name="spm_event_type" class="spm-meta-select">
                    <option value="academic" <?php selected($event_type, 'academic'); ?>>วิชาการและการเรียนรู้</option>
                    <option value="meeting" <?php selected($event_type, 'meeting'); ?>>ประชุมและสัมมนาผู้บริหาร</option>
                    <option value="activity" <?php selected($event_type, 'activity'); ?>>กิจกรรมนักเรียนและครู</option>
                    <option value="holiday" <?php selected($event_type, 'holiday'); ?>>วันสำคัญและประเพณี</option>
                </select>
            </div>
        </div>

        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">กลุ่มงานผู้รับผิดชอบ:</label>
                <select name="spm_event_dept" class="spm-meta-select">
                    <?php foreach ($depts as $d): ?>
                        <option value="<?php echo esc_attr($d); ?>" <?php selected($event_dept, $d); ?>><?php echo esc_html($d); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">สีประจำหมุดกิจกรรม (Dot Color):</label>
                <input type="color" name="spm_event_color" value="<?php echo esc_attr($event_color); ?>" style="height:38px; width:100px; padding:2px; border:1px solid #CBD5E1; border-radius:6px; cursor:pointer;">
            </div>
        </div>
    </div>
    <?php
}

// 3.3 RENDER DOWNLOAD META BOX
function spm_render_download_meta_box($post) {
    wp_nonce_field('spm_save_meta_box', 'spm_meta_nonce');
    $form_code = get_post_meta($post->ID, '_spm_form_code', true) ?: 'SPM-DOC-' . rand(10, 99);
    $form_dept = get_post_meta($post->ID, '_spm_form_dept', true) ?: 'กลุ่มบริหารงานบุคคล';
    $form_category = get_post_meta($post->ID, '_spm_form_category', true) ?: 'คำร้องทั่วไป';
    $form_file = get_post_meta($post->ID, '_spm_form_file', true) ?: '';
    $form_size = get_post_meta($post->ID, '_spm_form_size', true) ?: '1.5 MB';
    $depts = spm_get_dept_list();
    ?>
    <div class="spm-meta-box-wrap">
        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">รหัสแบบฟอร์ม (Form Code):</label>
                <input type="text" name="spm_form_code" value="<?php echo esc_attr($form_code); ?>" class="spm-meta-input" placeholder="เช่น บก.01 หรือ กค.05">
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">หมวดหมู่แบบฟอร์ม:</label>
                <input type="text" name="spm_form_category" value="<?php echo esc_attr($form_category); ?>" class="spm-meta-input" placeholder="เช่น ขอมี/เลื่อนวิทยฐานะ, การเงิน, สารบรรณ">
            </div>
        </div>

        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">สังกัดกลุ่มงาน (9 กลุ่ม 1 หน่วย):</label>
                <select name="spm_form_dept" class="spm-meta-select">
                    <?php foreach ($depts as $d): ?>
                        <option value="<?php echo esc_attr($d); ?>" <?php selected($form_dept, $d); ?>><?php echo esc_html($d); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">ขนาดไฟล์ (ระบุหรือประมาณ):</label>
                <input type="text" name="spm_form_size" value="<?php echo esc_attr($form_size); ?>" class="spm-meta-input" placeholder="เช่น 850 KB หรือ 1.2 MB">
            </div>
        </div>

        <div class="spm-meta-row">
            <label class="spm-meta-label">ไฟล์แบบฟอร์ม (PDF / Word / Excel):</label>
            <div style="display:flex; gap:8px; max-width:600px;">
                <input type="text" id="spm_form_file" name="spm_form_file" value="<?php echo esc_attr($form_file); ?>" class="spm-meta-input" placeholder="https://... หรืออัปโหลดไฟล์">
                <button type="button" class="button spm-meta-btn-upload spm-cpt-upload-btn" data-target="spm_form_file">📥 อัปโหลดแบบฟอร์ม</button>
            </div>
        </div>
    </div>
    <?php
}

// 3.4 RENDER CERTIFICATE META BOX
function spm_render_certificate_meta_box($post) {
    wp_nonce_field('spm_save_meta_box', 'spm_meta_nonce');
    $cert_code = get_post_meta($post->ID, '_spm_cert_code', true) ?: 'SPM-SKN-2569-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
    $recipient_name = get_post_meta($post->ID, '_spm_recipient_name', true) ?: '';
    $school_name = get_post_meta($post->ID, '_spm_school_name', true) ?: 'โรงเรียนสกลราชวิทยานุกูล';
    $award_title = get_post_meta($post->ID, '_spm_award_title', true) ?: 'รางวัลชนะเลิศเหรียญทอง';
    $issue_date = get_post_meta($post->ID, '_spm_issue_date', true) ?: date('d/m/') . (date('Y') + 543);
    $cert_file = get_post_meta($post->ID, '_spm_cert_file', true) ?: '';
    ?>
    <div class="spm-meta-box-wrap">
        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">รหัสตรวจสอบเกียรติบัตร (Certificate ID):</label>
                <input type="text" name="spm_cert_code" value="<?php echo esc_attr($cert_code); ?>" class="spm-meta-input" style="font-weight:700; color:#0284C7;" placeholder="เช่น SPM-SKN-2569-001">
                <div class="spm-meta-desc">ใช้สำหรับค้นหาและตรวจสอบความแท้จริงผ่านระบบหน้าเว็บ</div>
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">ชื่อ-นามสกุล ผู้ได้รับรางวัล / นักเรียน / ครู:</label>
                <input type="text" name="spm_recipient_name" value="<?php echo esc_attr($recipient_name); ?>" class="spm-meta-input" placeholder="เช่น นายสมชาย ใจดี">
            </div>
        </div>

        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">โรงเรียน / หน่วยงานต้นสังกัด:</label>
                <input type="text" name="spm_school_name" value="<?php echo esc_attr($school_name); ?>" class="spm-meta-input">
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">ชื่อรางวัล / ผลงานดีเด่น:</label>
                <input type="text" name="spm_award_title" value="<?php echo esc_attr($award_title); ?>" class="spm-meta-input">
            </div>
        </div>

        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">วันที่ออกเกียรติบัตร:</label>
                <input type="text" name="spm_issue_date" value="<?php echo esc_attr($issue_date); ?>" class="spm-meta-input">
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">ไฟล์เกียรติบัตร (PDF หรือ รูปภาพ):</label>
                <div style="display:flex; gap:8px;">
                    <input type="text" id="spm_cert_file" name="spm_cert_file" value="<?php echo esc_attr($cert_file); ?>" class="spm-meta-input" placeholder="https://...">
                    <button type="button" class="button spm-meta-btn-upload spm-cpt-upload-btn" data-target="spm_cert_file">🏅 อัปโหลดเกียรติบัตร</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// 3.5 RENDER SAFETY META BOX
function spm_render_safety_meta_box($post) {
    wp_nonce_field('spm_save_meta_box', 'spm_meta_nonce');
    $safety_cat = get_post_meta($post->ID, '_spm_safety_cat', true) ?: 'ภัยความรุนแรง';
    $safety_scope = get_post_meta($post->ID, '_spm_safety_scope', true) ?: 'ระดับเขตพื้นที่การศึกษา';
    $contact_tel = get_post_meta($post->ID, '_spm_contact_tel', true) ?: '042-711-456 สายด่วน MOE Safety';
    $safety_file = get_post_meta($post->ID, '_spm_safety_file', true) ?: '';
    ?>
    <div class="spm-meta-box-wrap">
        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">หมวดหมู่ภัยสถานศึกษา (4 ด้าน):</label>
                <select name="spm_safety_cat" class="spm-meta-select">
                    <option value="ภัยความรุนแรง" <?php selected($safety_cat, 'ภัยความรุนแรง'); ?>>1. ภัยที่เกิดจากการใช้ความรุนแรงของมนุษย์</option>
                    <option value="ภัยอุบัติเหตุ" <?php selected($safety_cat, 'ภัยอุบัติเหตุ'); ?>>2. ภัยที่เกิดจากอุบัติเหตุ</option>
                    <option value="ภัยละเมิดสิทธิ์" <?php selected($safety_cat, 'ภัยละเมิดสิทธิ์'); ?>>3. ภัยที่เกิดจากการละเมิดสิทธิ์</option>
                    <option value="ภัยสุขภาพกายและจิต" <?php selected($safety_cat, 'ภัยสุขภาพกายและจิต'); ?>>4. ภัยที่เกิดจากผลกระทบทางสุขภาวะกายและจิตใจ</option>
                </select>
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">ระดับการกำกับดูแล / เครือข่าย:</label>
                <input type="text" name="spm_safety_scope" value="<?php echo esc_attr($safety_scope); ?>" class="spm-meta-input">
            </div>
        </div>

        <div class="spm-meta-grid-2">
            <div class="spm-meta-row">
                <label class="spm-meta-label">เบอร์สายด่วน / ผู้ประสานงาน:</label>
                <input type="text" name="spm_contact_tel" value="<?php echo esc_attr($contact_tel); ?>" class="spm-meta-input">
            </div>
            <div class="spm-meta-row">
                <label class="spm-meta-label">คู่มือ / มาตรการดาวน์โหลด (PDF):</label>
                <div style="display:flex; gap:8px;">
                    <input type="text" id="spm_safety_file" name="spm_safety_file" value="<?php echo esc_attr($safety_file); ?>" class="spm-meta-input" placeholder="https://...">
                    <button type="button" class="button spm-meta-btn-upload spm-cpt-upload-btn" data-target="spm_safety_file">🛡️ อัปโหลดคู่มือ</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// 4. JAVASCRIPT MEDIA UPLOADER TRIGGER FOR CPT SCREENS
add_action('admin_footer', 'spm_cpt_media_uploader_script');
function spm_cpt_media_uploader_script() {
    global $post_type;
    $portal_cpts = array('spm_circular', 'spm_calendar', 'spm_download', 'spm_certificate', 'spm_safety');
    if (!in_array($post_type, $portal_cpts)) return;
    ?>
    <script>
    jQuery(document).ready(function($) {
        $('.spm-cpt-upload-btn').on('click', function(e) {
            e.preventDefault();
            var targetInputId = $(this).data('target');
            var customUploader = wp.media({
                title: 'เลือกหรืออัปโหลดไฟล์เอกสาร',
                button: { text: 'เลือกไฟล์นี้' },
                multiple: false
            }).on('select', function() {
                var attachment = customUploader.state().get('selection').first().toJSON();
                $('#' + targetInputId).val(attachment.url);
            }).open();
        });
    });
    </script>
    <?php
}

// 5. SAVE META BOX VALUES
add_action('save_post', 'spm_save_portal_cpts_meta');
function spm_save_portal_cpts_meta($post_id) {
    if (!isset($_POST['spm_meta_nonce']) || !wp_verify_nonce($_POST['spm_meta_nonce'], 'spm_save_meta_box')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $fields = array(
        'spm_doc_number' => '_spm_doc_number',
        'spm_doc_date' => '_spm_doc_date',
        'spm_doc_type' => '_spm_doc_type',
        'spm_doc_urgency' => '_spm_doc_urgency',
        'spm_doc_dept' => '_spm_doc_dept',
        'spm_doc_file' => '_spm_doc_file',
        'spm_event_date' => '_spm_event_date',
        'spm_event_time' => '_spm_event_time',
        'spm_event_location' => '_spm_event_location',
        'spm_event_dept' => '_spm_event_dept',
        'spm_event_type' => '_spm_event_type',
        'spm_event_color' => '_spm_event_color',
        'spm_form_code' => '_spm_form_code',
        'spm_form_dept' => '_spm_form_dept',
        'spm_form_category' => '_spm_form_category',
        'spm_form_file' => '_spm_form_file',
        'spm_form_size' => '_spm_form_size',
        'spm_cert_code' => '_spm_cert_code',
        'spm_recipient_name' => '_spm_recipient_name',
        'spm_school_name' => '_spm_school_name',
        'spm_award_title' => '_spm_award_title',
        'spm_issue_date' => '_spm_issue_date',
        'spm_cert_file' => '_spm_cert_file',
        'spm_safety_cat' => '_spm_safety_cat',
        'spm_safety_scope' => '_spm_safety_scope',
        'spm_contact_tel' => '_spm_contact_tel',
        'spm_safety_file' => '_spm_safety_file'
    );

    foreach ($fields as $post_key => $meta_key) {
        if (isset($_POST[$post_key])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$post_key]));
        }
    }
}

// 6. CUSTOM ADMIN LIST TABLE COLUMNS
// Circular Columns
add_filter('manage_spm_circular_posts_columns', function($cols) {
    $new = array();
    foreach ($cols as $k => $v) {
        $new[$k] = $v;
        if ($k === 'title') {
            $new['doc_urgency'] = 'ความเร่งด่วน';
            $new['doc_number'] = 'เลขที่หนังสือ';
            $new['doc_date'] = 'วันที่ลงนาม';
            $new['doc_dept'] = 'กลุ่มงาน';
            $new['doc_file'] = 'เอกสารแนบ';
        }
    }
    return $new;
});
add_action('manage_spm_circular_posts_custom_column', function($col, $post_id) {
    if ($col === 'doc_urgency') {
        $urg = get_post_meta($post_id, '_spm_doc_urgency', true);
        echo ($urg === 'urgent') ? '<span style="background:#FEE2E2; color:#DC2626; padding:2px 8px; border-radius:12px; font-weight:700; font-size:11px;">⚡ ด่วนที่สุด</span>' : '<span style="color:#64748B; font-size:11px;">ปกติ</span>';
    } elseif ($col === 'doc_number') {
        echo '<strong>' . esc_html(get_post_meta($post_id, '_spm_doc_number', true) ?: '-') . '</strong>';
    } elseif ($col === 'doc_date') {
        echo esc_html(get_post_meta($post_id, '_spm_doc_date', true) ?: '-');
    } elseif ($col === 'doc_dept') {
        echo '<span style="color:#0284C7;">' . esc_html(get_post_meta($post_id, '_spm_doc_dept', true) ?: '-') . '</span>';
    } elseif ($col === 'doc_file') {
        $f = get_post_meta($post_id, '_spm_doc_file', true);
        echo $f ? '<a href="' . esc_url($f) . '" target="_blank" style="color:#DC2626; font-weight:700;">📄 PDF</a>' : '<span style="color:#CBD5E1;">-</span>';
    }
}, 10, 2);

// Calendar Columns
add_filter('manage_spm_calendar_posts_columns', function($cols) {
    $new = array();
    foreach ($cols as $k => $v) {
        $new[$k] = $v;
        if ($k === 'title') {
            $new['event_date'] = 'วันที่จัด';
            $new['event_time'] = 'เวลา';
            $new['event_dept'] = 'กลุ่มงาน';
            $new['event_location'] = 'สถานที่';
        }
    }
    return $new;
});
add_action('manage_spm_calendar_posts_custom_column', function($col, $post_id) {
    if ($col === 'event_date') {
        $c = get_post_meta($post_id, '_spm_event_color', true) ?: '#ECC86A';
        echo '<span style="display:inline-block; width:10px; height:10px; border-radius:50%; background:' . esc_attr($c) . '; margin-right:6px;"></span>';
        echo '<strong>' . esc_html(get_post_meta($post_id, '_spm_event_date', true) ?: '-') . '</strong>';
    } elseif ($col === 'event_time') {
        echo esc_html(get_post_meta($post_id, '_spm_event_time', true) ?: '-');
    } elseif ($col === 'event_dept') {
        echo esc_html(get_post_meta($post_id, '_spm_event_dept', true) ?: '-');
    } elseif ($col === 'event_location') {
        echo esc_html(get_post_meta($post_id, '_spm_event_location', true) ?: '-');
    }
}, 10, 2);

// Download Columns
add_filter('manage_spm_download_posts_columns', function($cols) {
    $new = array();
    foreach ($cols as $k => $v) {
        $new[$k] = $v;
        if ($k === 'title') {
            $new['form_code'] = 'รหัสแบบฟอร์ม';
            $new['form_dept'] = 'กลุ่มงาน';
            $new['form_file'] = 'ดาวน์โหลด';
        }
    }
    return $new;
});
add_action('manage_spm_download_posts_custom_column', function($col, $post_id) {
    if ($col === 'form_code') {
        echo '<code>' . esc_html(get_post_meta($post_id, '_spm_form_code', true) ?: '-') . '</code>';
    } elseif ($col === 'form_dept') {
        echo esc_html(get_post_meta($post_id, '_spm_form_dept', true) ?: '-');
    } elseif ($col === 'form_file') {
        $f = get_post_meta($post_id, '_spm_form_file', true);
        echo $f ? '<a href="' . esc_url($f) . '" target="_blank" style="color:#0284C7; font-weight:700;">📥 Download</a>' : '<span style="color:#CBD5E1;">-</span>';
    }
}, 10, 2);

// Certificate Columns
add_filter('manage_spm_certificate_posts_columns', function($cols) {
    $new = array();
    foreach ($cols as $k => $v) {
        $new[$k] = $v;
        if ($k === 'title') {
            $new['cert_code'] = 'รหัส Cert ID';
            $new['recipient'] = 'ผู้ได้รับรางวัล';
            $new['school'] = 'โรงเรียน';
            $new['award'] = 'รางวัล';
        }
    }
    return $new;
});
add_action('manage_spm_certificate_posts_custom_column', function($col, $post_id) {
    if ($col === 'cert_code') {
        echo '<strong style="color:#0284C7;">' . esc_html(get_post_meta($post_id, '_spm_cert_code', true) ?: '-') . '</strong>';
    } elseif ($col === 'recipient') {
        echo esc_html(get_post_meta($post_id, '_spm_recipient_name', true) ?: '-');
    } elseif ($col === 'school') {
        echo esc_html(get_post_meta($post_id, '_spm_school_name', true) ?: '-');
    } elseif ($col === 'award') {
        echo esc_html(get_post_meta($post_id, '_spm_award_title', true) ?: '-');
    }
}, 10, 2);


// 7. REST API ENDPOINTS FOR LIVE FRONTEND HYDRATION
add_action('rest_api_init', 'spm_register_portal_crud_rest_routes');
function spm_register_portal_crud_rest_routes() {
    // 7.1 Circulars API
    register_rest_route('spm/v1', '/circulars', array(
        'methods' => 'GET',
        'callback' => 'spm_rest_get_circulars',
        'permission_callback' => '__return_true'
    ));

    // 7.2 Calendar API
    register_rest_route('spm/v1', '/calendar', array(
        'methods' => 'GET',
        'callback' => 'spm_rest_get_calendar',
        'permission_callback' => '__return_true'
    ));

    // 7.3 Downloads API
    register_rest_route('spm/v1', '/downloads', array(
        'methods' => 'GET',
        'callback' => 'spm_rest_get_downloads',
        'permission_callback' => '__return_true'
    ));

    // 7.4 Certificate Search API
    register_rest_route('spm/v1', '/certificates', array(
        'methods' => 'GET',
        'callback' => 'spm_rest_get_certificates',
        'permission_callback' => '__return_true'
    ));

    // 7.5 Safety API
    register_rest_route('spm/v1', '/safety', array(
        'methods' => 'GET',
        'callback' => 'spm_rest_get_safety',
        'permission_callback' => '__return_true'
    ));

    // 7.6 Seed Default Data API (One-click seeder)
    register_rest_route('spm/v1', '/seed-defaults', array(
        'methods' => 'POST',
        'callback' => 'spm_rest_seed_default_cpt_data',
        'permission_callback' => function() { return current_user_can('edit_posts'); }
    ));
}

// 7.1 Handler: Circulars
function spm_rest_get_circulars($request) {
    $type = $request->get_param('type');
    $dept = $request->get_param('dept');
    $q = $request->get_param('q');

    $args = array(
        'post_type' => 'spm_circular',
        'posts_per_page' => 100,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    if (!empty($q)) $args['s'] = $q;

    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $pid = get_the_ID();
            $item_type = get_post_meta($pid, '_spm_doc_type', true) ?: 'หนังสือเวียน';
            $item_dept = get_post_meta($pid, '_spm_doc_dept', true) ?: 'กลุ่มอำนวยการ';

            if ($type && $type !== 'all' && $item_type !== $type) continue;
            if ($dept && $dept !== 'all' && $item_dept !== $dept) continue;

            $results[] = array(
                'id' => $pid,
                'number' => get_post_meta($pid, '_spm_doc_number', true) ?: ('ศธ 04228/ว ' . $pid),
                'date' => get_post_meta($pid, '_spm_doc_date', true) ?: get_the_date('d M Y'),
                'title' => get_the_title(),
                'dept' => $item_dept,
                'type' => $item_type,
                'urgency' => get_post_meta($pid, '_spm_doc_urgency', true) ?: 'normal',
                'file' => get_post_meta($pid, '_spm_doc_file', true) ?: '#',
            );
        }
        wp_reset_postdata();
    }

    return rest_ensure_response($results);
}

// 7.2 Handler: Calendar
function spm_rest_get_calendar($request) {
    $args = array(
        'post_type' => 'spm_calendar',
        'posts_per_page' => 100,
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $pid = get_the_ID();
            $raw_date = get_post_meta($pid, '_spm_event_date', true);
            $day = $raw_date ? (int)date('j', strtotime($raw_date)) : 1;
            $month = $raw_date ? (int)date('n', strtotime($raw_date)) : (int)date('n');
            $year = $raw_date ? (int)date('Y', strtotime($raw_date)) : (int)date('Y');

            $results[] = array(
                'id' => $pid,
                'title' => get_the_title(),
                'day' => $day,
                'month' => $month,
                'year' => $year,
                'date_str' => $raw_date,
                'time' => get_post_meta($pid, '_spm_event_time', true) ?: '',
                'location' => get_post_meta($pid, '_spm_event_location', true) ?: '',
                'dept' => get_post_meta($pid, '_spm_event_dept', true) ?: '',
                'category' => get_post_meta($pid, '_spm_event_type', true) ?: 'academic',
                'color' => get_post_meta($pid, '_spm_event_color', true) ?: '#ECC86A',
                'desc' => get_the_excerpt() ?: get_the_title()
            );
        }
        wp_reset_postdata();
    }
    return rest_ensure_response($results);
}

// 7.3 Handler: Downloads
function spm_rest_get_downloads($request) {
    $dept = $request->get_param('dept');
    $args = array(
        'post_type' => 'spm_download',
        'posts_per_page' => 100,
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $pid = get_the_ID();
            $item_dept = get_post_meta($pid, '_spm_form_dept', true) ?: 'กลุ่มอำนวยการ';
            if ($dept && $dept !== 'all' && $item_dept !== $dept) continue;

            $file_url = get_post_meta($pid, '_spm_form_file', true) ?: '#';
            $ext = pathinfo($file_url, PATHINFO_EXTENSION) ?: 'pdf';

            $results[] = array(
                'id' => $pid,
                'code' => get_post_meta($pid, '_spm_form_code', true) ?: 'DOC-' . $pid,
                'title' => get_the_title(),
                'dept' => $item_dept,
                'category' => get_post_meta($pid, '_spm_form_category', true) ?: 'ทั่วไป',
                'size' => get_post_meta($pid, '_spm_form_size', true) ?: '1 MB',
                'ext' => strtoupper($ext),
                'url' => $file_url
            );
        }
        wp_reset_postdata();
    }
    return rest_ensure_response($results);
}

// 7.4 Handler: Certificates
function spm_rest_get_certificates($request) {
    $code = strtoupper(trim($request->get_param('code') ?: ''));
    $args = array(
        'post_type' => 'spm_certificate',
        'posts_per_page' => 100,
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $pid = get_the_ID();
            $cert_code = strtoupper(trim(get_post_meta($pid, '_spm_cert_code', true)));
            
            $item = array(
                'id' => $pid,
                'code' => $cert_code,
                'recipient' => get_post_meta($pid, '_spm_recipient_name', true) ?: get_the_title(),
                'school' => get_post_meta($pid, '_spm_school_name', true) ?: '',
                'award' => get_post_meta($pid, '_spm_award_title', true) ?: '',
                'date' => get_post_meta($pid, '_spm_issue_date', true) ?: '',
                'file' => get_post_meta($pid, '_spm_cert_file', true) ?: ''
            );

            if (!empty($code)) {
                if ($cert_code === $code) {
                    wp_reset_postdata();
                    return rest_ensure_response(array('found' => true, 'cert' => $item));
                }
            } else {
                $results[] = $item;
            }
        }
        wp_reset_postdata();
    }

    if (!empty($code)) {
        return rest_ensure_response(array('found' => false, 'message' => 'ไม่พบข้อมูลเกียรติบัตร'));
    }
    return rest_ensure_response($results);
}

// 7.5 Handler: Safety
function spm_rest_get_safety($request) {
    $args = array(
        'post_type' => 'spm_safety',
        'posts_per_page' => 50,
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $pid = get_the_ID();
            $results[] = array(
                'id' => $pid,
                'title' => get_the_title(),
                'category' => get_post_meta($pid, '_spm_safety_cat', true) ?: 'ความปลอดภัย',
                'scope' => get_post_meta($pid, '_spm_safety_scope', true) ?: '',
                'tel' => get_post_meta($pid, '_spm_contact_tel', true) ?: '',
                'file' => get_post_meta($pid, '_spm_safety_file', true) ?: '',
                'content' => get_the_content()
            );
        }
        wp_reset_postdata();
    }
    return rest_ensure_response($results);
}

// 7.6 Auto-seed sample records if tables are empty
add_action('admin_init', 'spm_auto_seed_initial_cpt_records');
function spm_auto_seed_initial_cpt_records() {
    if (get_option('spm_cpts_initial_seeded_v1')) return;

    // Seed sample circulars
    $existing = get_posts(array('post_type' => 'spm_circular', 'posts_per_page' => 1));
    if (empty($existing)) {
        $sample_circulars = array(
            array('title' => 'แนวทางการประเมินผลสัมฤทธิ์ตามเกณฑ์ ว.PA และการตรวจสอบข้อมูลในระบบ DPA ภาคเรียนที่ 1/2569', 'num' => 'ศธ 04228/ว 1845', 'date' => '23 ต.ค. 2569', 'dept' => 'กลุ่มบริหารงานบุคคล', 'type' => 'หนังสือเวียน', 'urg' => 'urgent'),
            array('title' => 'ซักซ้อมความเข้าใจการเปิดภาคเรียนที่ 2/2569 และมาตรการความปลอดภัยสถานศึกษา MOE Safety Center', 'num' => 'ศธ 04228/ว 1840', 'date' => '22 ต.ค. 2569', 'dept' => 'กลุ่มส่งเสริมการจัดการศึกษา', 'type' => 'หนังสือเวียน', 'urg' => 'urgent'),
            array('title' => 'แต่งตั้งคณะกรรมการขับเคลื่อนยุทธศาสตร์ห้องเรียนดิจิทัลและ AI ในการศึกษา สพม.สกลนคร', 'num' => 'คำสั่ง สพม. ที่ 412/2569', 'date' => '20 ต.ค. 2569', 'dept' => 'กลุ่มส่งเสริมการศึกษาทางไกลฯ (DLICT)', 'type' => 'คำสั่งเขต', 'urg' => 'normal'),
            array('title' => 'ประกาศผู้ชนะการเสนอราคา จ้างปรับปรุงระบบโครงข่ายอินเทอร์เน็ตความเร็วสูง 45 โรงเรียน', 'num' => 'ประกาศ สพม.สกลนคร', 'date' => '18 ต.ค. 2569', 'dept' => 'กลุ่มบริหารงานการเงินและสินทรัพย์', 'type' => 'ประกาศ', 'urg' => 'normal'),
            array('title' => 'ประชาสัมพันธ์การประกวดนวัตกรรมการเรียนรู้เชิงรุก (Active Learning) ระดับมัธยมศึกษา ประจำปี 2569', 'num' => 'ศธ 04228/ว 1820', 'date' => '15 ต.ค. 2569', 'dept' => 'กลุ่มนิเทศ ติดตามฯ', 'type' => 'หนังสือเวียน', 'urg' => 'normal')
        );
        foreach ($sample_circulars as $c) {
            $pid = wp_insert_post(array(
                'post_title' => $c['title'],
                'post_type' => 'spm_circular',
                'post_status' => 'publish'
            ));
            if ($pid && !is_wp_error($pid)) {
                update_post_meta($pid, '_spm_doc_number', $c['num']);
                update_post_meta($pid, '_spm_doc_date', $c['date']);
                update_post_meta($pid, '_spm_doc_dept', $c['dept']);
                update_post_meta($pid, '_spm_doc_type', $c['type']);
                update_post_meta($pid, '_spm_doc_urgency', $c['urg']);
                update_post_meta($pid, '_spm_doc_file', 'https://sesaosakon.go.th/site/');
            }
        }
    }

    // Seed sample downloads
    $existing_dl = get_posts(array('post_type' => 'spm_download', 'posts_per_page' => 1));
    if (empty($existing_dl)) {
        $sample_dls = array(
            array('title' => 'แบบฟอร์มขอเบิกเงินสวัสดิการเกี่ยวกับการรักษาพยาบาล (กค.01)', 'code' => 'กค.01', 'dept' => 'กลุ่มบริหารงานการเงินและสินทรัพย์', 'cat' => 'การเงินและสวัสดิการ', 'size' => '245 KB'),
            array('title' => 'แบบคำขอมีบัตรประจำตัวเจ้าหน้าที่ของรัฐ ข้าราชการครูและบุคลากรทางการศึกษา', 'code' => 'บก.04', 'dept' => 'กลุ่มบริหารงานบุคคล', 'cat' => 'งานบุคคล', 'size' => '180 KB'),
            array('title' => 'แบบฟอร์มขอใช้ห้องประชุมและสิ่งอำนวยความสะดวก อาคารสารสนเทศ สพม.สกลนคร', 'code' => 'อก.08', 'dept' => 'กลุ่มอำนวยการ', 'cat' => 'งานอาคารสถานที่', 'size' => '320 KB'),
            array('title' => 'แบบฟอร์มรายงานผลการดำเนินงานนิเทศการศึกษาและประกันคุณภาพภายใน', 'code' => 'นศ.12', 'dept' => 'กลุ่มนิเทศ ติดตามฯ', 'cat' => 'งานนิเทศ', 'size' => '540 KB')
        );
        foreach ($sample_dls as $d) {
            $pid = wp_insert_post(array(
                'post_title' => $d['title'],
                'post_type' => 'spm_download',
                'post_status' => 'publish'
            ));
            if ($pid && !is_wp_error($pid)) {
                update_post_meta($pid, '_spm_form_code', $d['code']);
                update_post_meta($pid, '_spm_form_dept', $d['dept']);
                update_post_meta($pid, '_spm_form_category', $d['cat']);
                update_post_meta($pid, '_spm_form_size', $d['size']);
                update_post_meta($pid, '_spm_form_file', 'https://sesaosakon.go.th/site/');
            }
        }
    }

    // Seed sample certificates
    $existing_cert = get_posts(array('post_type' => 'spm_certificate', 'posts_per_page' => 1));
    if (empty($existing_cert)) {
        $sample_certs = array(
            array('title' => 'นายเกรียงไกร มั่นคง', 'code' => 'SPM-SKN-2569-001', 'recipient' => 'นายเกรียงไกร มั่นคง', 'school' => 'โรงเรียนสกลราชวิทยานุกูล', 'award' => 'รางวัลเหรียญทอง การแข่งขันหุ่นยนต์ปัญญาประดิษฐ์ระดับชาติ', 'date' => '15 ต.ค. 2569'),
            array('title' => 'นางสาวพิมลพร สดใส', 'code' => 'SPM-SKN-2569-002', 'recipient' => 'นางสาวพิมลพร สดใส', 'school' => 'โรงเรียนธาตุนารายณ์วิทยา', 'award' => 'รางวัลชนะเลิศ การประกวดโครงงานสะเต็มศึกษา (STEM Project)', 'date' => '12 ต.ค. 2569'),
            array('title' => 'นายวีระชัย มีทรัพย์', 'code' => 'SPM-SKN-2569-003', 'recipient' => 'นายวีระชัย มีทรัพย์', 'school' => 'โรงเรียนสว่างแดนดิน', 'award' => 'ครูผู้ฝึกสอนยอดเยี่ยม ด้านนวัตกรรมการจัดการเรียนรู้ดิจิทัล', 'date' => '10 ต.ค. 2569')
        );
        foreach ($sample_certs as $crt) {
            $pid = wp_insert_post(array(
                'post_title' => $crt['title'],
                'post_type' => 'spm_certificate',
                'post_status' => 'publish'
            ));
            if ($pid && !is_wp_error($pid)) {
                update_post_meta($pid, '_spm_cert_code', $crt['code']);
                update_post_meta($pid, '_spm_recipient_name', $crt['recipient']);
                update_post_meta($pid, '_spm_school_name', $crt['school']);
                update_post_meta($pid, '_spm_award_title', $crt['award']);
                update_post_meta($pid, '_spm_issue_date', $crt['date']);
                update_post_meta($pid, '_spm_cert_file', 'https://sesaosakon.go.th/site/');
            }
        }
    }

    update_option('spm_cpts_initial_seeded_v1', 1);
}
