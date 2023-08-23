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
add_action( 'admin_init', 'plugin_settings' );

function plugin_settings(){

	// параметры: $option_group, $option_name, $sanitize_callback
	register_setting( 'exec_settings', 'option_name', 'sanitize_callback' );

	// параметры: $id, $title, $callback, $page
	add_settings_section( 'section_id', '', '', 'exec_settings' ); // 'section_id', 'Основные настройки', '', 'exec_settings'

	// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('primer_field1', 'Название опции', 'fill_primer_field1', 'exec_settings', 'section_id' );
	add_settings_field('primer_field2', 'Другая опция', 'fill_primer_field2', 'exec_settings', 'section_id' );
}

// Заполняем опцию 1
function fill_primer_field1(){

	$val = get_option('option_name');
	$val = $val ? $val['input'] : null;
	?>
    <div class="settings-field">
        <input type="text" name="option_name[input]" value="<?php echo esc_attr( $val ) ?>" />
    </div>
	<?php
}

// Заполняем опцию 2
function fill_primer_field2(){

	$val = get_option('option_name');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="option_name[checkbox]" value="1" <?php checked( 1, $val ) ?> /> отметить</label>
	<?php
}

// Очистка данных
function sanitize_callback( $options ){

	foreach( $options as $name => & $val ){
		if( $name == 'input' )
			$val = strip_tags( $val );

		if( $name == 'checkbox' )
			$val = intval( $val );
	}

	//die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

	return $options;
}
