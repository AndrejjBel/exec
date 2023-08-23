<?php
require get_template_directory() . '/inc/settings.php';
require get_template_directory() . '/inc/meta-box.php';
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' ); // remove extra svg code in wordpress

// Adds a main styles and scripts for admin panel.
add_action( 'admin_enqueue_scripts', function(){
    wp_enqueue_style('admin', get_stylesheet_directory_uri() . '/css/admin.css',	array(),
        filemtime( get_stylesheet_directory() . '/css/admin.css' )
    );
}, 99 );

// Adds a main styles and scripts.
add_action( 'wp_enqueue_scripts', 'exec_main_scripts_old', 99 );
function exec_main_scripts_old() {
    $bundle_obj = [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce('exec-nonce')
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
