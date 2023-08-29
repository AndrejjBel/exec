<?php
require get_template_directory() . '/inc/settings.php';
require get_template_directory() . '/inc/meta-box.php';
require get_template_directory() . '/inc/mail.php';
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' ); // remove extra svg code in wordpress

// Adds a main styles and scripts for admin panel.
add_action( 'admin_enqueue_scripts', function(){
    wp_enqueue_style('admin', get_stylesheet_directory_uri() . '/css/admin.css',	array(),
        filemtime( get_stylesheet_directory() . '/css/admin.css' )
    );
}, 99 );

// Adds a main styles and scripts front.
add_action( 'wp_enqueue_scripts', 'exec_main_scripts_old', 99 );
function exec_main_scripts_old() {
    $bundle_obj = [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce('exec-nonce'),
        'action' => 'exec_form'
    ];
    // css
    wp_enqueue_style('main-min', get_stylesheet_directory_uri() . '/dist/main.min.css',	array(),
        filemtime( get_stylesheet_directory() . '/dist/main.min.css' )
    );

    // js
    wp_enqueue_script('bundle', get_stylesheet_directory_uri() . '/dist/bundle.min.js',	array('jquery'),
        filemtime( get_stylesheet_directory() . '/dist/bundle.min.js' ), [ 'strategy' => 'defer' ]
    );
    // wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js',	array('jquery'),
    //     filemtime( get_stylesheet_directory() . '/js/custom.js' ), [ 'strategy' => 'defer' ]
    // );

    wp_add_inline_script( 'bundle', 'const exec_ajax = ' . wp_json_encode( $bundle_obj ), 'before' );
}

function exec_custom_logo() {
    $logo_img = '';
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if( $custom_logo_id ){
        $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
            'class'    => 'custom-logo',
            'itemprop' => 'logo',
        ) );
    }
    echo $logo_img;
}

function exec_language_attributes() {
    if ( is_page( 'en' ) ) {
        echo 'lang="en-US"';
    } else {
        language_attributes();
    }
}

add_filter( 'document_title', 'modify_document_title_for_front_page' );
function modify_document_title_for_front_page( $title ) {
	return is_page( 'en' ) ? 'EXEC 4.0' : $title;
}

function exec_language_police() {
    if ( is_page( 'en' ) ) {
        echo '<div class="modal__title policy ff-mediator">Data policy</div>';
        echo '<div class="modal-content">of my own free will and volition express my consent to process my Personal Data by JSC «Institute of Leadership» at the address: 121099, Moscow, 2 – nd Smolensky lane, 1/4, room 4/6/5. And its affiliated companies for purposes: of potential future employment with the possibility of such Data processing during the effective period of labor or service contract of informational and analytical direct mail including collection, recording, systematization, accumulation, storage, clarification (update, correction), retrieval, usage, transfer (distribution, provision, access), depersonalization, blocking, removal, destruction, transboundary transfer of Personal Data (including any countries without adequate protection of the personal data), as well as for execution of any other actions in respect to such Personal Data in accordance with current legislation of the Russian Federation, executed by or without means of automated processing.
        The list of Personal Data subject to processing includes name, last name, second name, date and place of birth, address of place of residence and address of registration, marital, social and property status, education, qualification and other skills, profession, information on previous places of work, functions, expected level of remuneration, names of referees, hobby, personal characteristics, and any other information concerning my personality.
        I hereby acknowledge and accept that in case it is necessary for the above-stated purposes to grant my Personal Data to the third party, JSC «Institute of Leadership» is entitled to disclose my Personal Data to such third parties and other authorized persons, only to the extend required for the above-stated actions, as well as to provide such third parties with the relevant documents containing my Personal Data. This Consent to process Personal Data is executed for indefinite period and is valid until the moment of withdrawal of Consent.
        The Consent can be withdrawn by sending of correspondent written notice to JSC «Institute of Leadership» at the address: 121099, Moscow, 2 – nd Smolensky lane, 1/4, room 4/6/5. In case of withdraw of consent receipt JSC «Institute of Leadership» is obliged to dismiss the processing of Personal Data, and in case the saving of the such Data is not required for the purposes of Personal Data’ processing – to delete them not exceeding 3 working days from the date of receipt of the specified withdraw.
        </div>';
    } else {
        echo '<div class="modal__title policy ff-mediator">Политика работы с данными</div>';
        echo '<div class="modal-content">Свободно, своей волей и в своем интересе даю согласие АО «Институт Лидерства», адрес: 121099, г. Москва, 2 – й Смоленский переулок, д. 1, корп. 4, помещение 4/6/5 , на обработку моих персональных данных в целях: возможного дальнейшего трудоустройства с возможностью обработки персональных данных в течение срока действия трудового и/или гражданско-правового договора, рассылки информационных и аналитических материалов, включая: сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение), трансграничную передачу, а также осуществление иных действий с персональными данными с учетом действующего законодательства РФ и международных норм, совершаемых с использованием средств автоматизации или без их использования.
        Перечень персональных данных, подлежащих обработке: фамилия, имя, отчество, дата и место рождения, контактные данные, адрес проживания, регистрации, семейное, социальное положение, должность, образование, квалификационные и иные навыки, профессия, информация о предыдущих местах работы, обязанности, уровень доходов, хобби, личностные характеристики, иная информация, относящаяся к моей личности.
        Настоящим я признаю и подтверждаю, что в случае необходимости предоставления моих персональных данных для достижения указанной выше цели третьему лицу, АО «Институт Лидерства» вправе в необходимом объеме раскрывать для совершения вышеуказанных действий мои персональные данные таким третьим и иным уполномоченным лицам, а также представлять им соответствующие документы, содержащие персональные данные. Настоящее согласие выдано на неопределенный срок и действует до момента получения отзыва согласия на обработку персональных данных.
        Согласие может быть отозвано путем направления письменного уведомления по адресу: 121099, г. Москва, 2 – й Смоленский переулок, д. 1, корп. 4, помещение 4/6/5. В случае отзыва согласия на обработку персональных данных АО «Институт Лидерства» обязано прекратить их обработку, а если сохранение не требуется для целей обработки персональных данных, уничтожить в срок не превышающий 3 рабочих дней с даты поступления указанного отзыва.
        </div>';
    }
}

function exec_language_words($ru) {
    require get_template_directory() . '/inc/words.php';
    if ( is_page( 'en' ) ) {
        if ( $words[$ru] ) {
            return $words[$ru];
        } else {
            return $ru;
        }

    } else {
        return $ru;
    }
}

function exec_language_words_settings($ru) {
    $option_lang = get_option('lang');
    $langs = explode("\n", $option_lang);
    $langs_obj = [];
    foreach ($langs as $lang) {
    	$item = explode("-", $lang);
    	$item_obj = [];
    	$item_obj[$item[0]] = $item[1];
    	$langs_obj[] = $item_obj;
    }
    $langs_obj_fin = call_user_func_array('array_merge', $langs_obj);
    if ( is_page( 'en' ) ) {
        return $langs_obj_fin[$ru];
    } else {
        return $ru;
    }
}
