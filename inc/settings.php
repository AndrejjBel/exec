<?php
add_action( 'admin_menu', 'exec_settings_menu_page', 25 );

function exec_settings_menu_page(){
    global $exec_settings_page;
	add_menu_page(
		'Настройки Exec', // тайтл страницы
		'Настройки Exec', // текст ссылки в меню
		'manage_options', // права пользователя, необходимые для доступа к странице
		'exec_settings', // ярлык страницы
		'exec_settings_page_callback', // функция, которая выводит содержимое страницы
		'dashicons-admin-generic', // иконка, в данном случае из Dashicons
		3 // позиция в меню
	);
}

function exec_settings_page_callback(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>

		<form action="options.php" method="POST">
			<?php
				settings_fields( 'exec_settings' );     // скрытые защитные поля
				do_settings_sections( 'exec_settings' ); // секции с настройками (опциями). У нас она всего одна 'section_id'
				submit_button();
			?>
		</form>
	</div>
	<?php
}

/**
 * Регистрируем настройки.
 * Настройки будут храниться в массиве, а не одна настройка = одна опция.
 */
add_action( 'admin_init', 'exec_settings' );

function exec_settings(){

	// параметры: $option_group, $option_name, $sanitize_callback
	register_setting( 'exec_settings', 'option_name', 'sanitize_callback' );
    // register_setting( 'exec_settings', 'lang', 'sanitize_callback_lang' );

	// параметры: $id, $title, $callback, $page
	add_settings_section( 'section_id', '', '', 'exec_settings' ); // 'section_id', 'Основные настройки', '', 'exec_settings'

	// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('exec_field_email', 'E-mail для сообщений с сайта', 'fill_exec_field_email', 'exec_settings', 'section_id' );
    add_settings_field('exec_field_phone', 'Телефон в блоке Контакты', 'fill_exec_field_phone', 'exec_settings', 'section_id' );
	add_settings_field('exec_field_platform_link', 'Ссылка на платформу', 'fill_exec_field_platform_link', 'exec_settings', 'section_id' );
    // add_settings_field('exec_field_type_lang', 'Свой перевод', 'fill_exec_field_type_lang', 'exec_settings', 'section_id' );
    // add_settings_field('exec_field_lang', 'Свой перевод фраз', 'fill_exec_field_lang', 'exec_settings', 'section_id' );
}

function fill_exec_field_email(){
	$val = get_option('option_name');
	$val = $val ? $val['email_message'] : null;
	?>
    <div class="settings-field">
        <input type="text" name="option_name[email_message]" value="<?php echo esc_attr( $val ) ?>" />
    </div>
	<?php
}

function fill_exec_field_phone(){
	$val = get_option('option_name');
	$val = $val ? $val['phone_contact'] : null;
	?>
    <div class="settings-field">
        <input type="text" name="option_name[phone_contact]" value="<?php echo esc_attr( $val ) ?>" />
    </div>
	<?php
}

function fill_exec_field_platform_link(){
	$val = get_option('option_name');
	$val = $val ? $val['platform_link'] : null;
	?>
    <div class="settings-field">
        <input type="text" name="option_name[platform_link]" value="<?php echo esc_attr( $val ) ?>" />
    </div>
	<?php
}

function fill_exec_field_type_lang(){
	$val = get_option('option_name');
    if ( array_key_exists( 'type_lang', $val ) ) {
        $val = $val ? $val['type_lang'] : null;
    }
	?>
	<label><input type="checkbox" name="option_name[type_lang]" value="1" <?php checked( 1, $val ) ?> /> использовать свой перевод из настроек ниже</label>
	<?php
}

function fill_exec_field_lang(){
	$val_lang = get_option('lang');
	$val_lang = $val_lang ? $val_lang : null;
	?>
    <div class="settings-field">
        <textarea name="lang" rows="12" cols="80" placeholder=""><?php echo esc_attr( $val_lang ) ?></textarea>
    </div>
	<?php
}

// Очистка данных
function sanitize_callback( $options ){
	foreach( $options as $name => & $val ){
		if( $name == 'email_message' )
			$val = strip_tags( $val );

        if( $name == 'phone_contact' )
			$val = strip_tags( $val );

		if( $name == 'platform_link' )
			$val = strip_tags( $val );

        if( $name == 'checkbox' )
		    $val = intval( $val );
	}
	return $options;
}

function sanitize_callback_lang( $options ){
	foreach( $options as $option ){
		$option = strip_tags( $option );
	}
	return $options;
}

function exec_get_options($key) {
    $set_options = get_option('option_name');
    return $set_options[$key];
}
