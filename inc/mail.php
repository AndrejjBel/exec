<?php
add_action( 'wp_ajax_nopriv_exec_form', 'exec_form_submit' );
add_action( 'wp_ajax_exec_form', 'exec_form_submit' );
function exec_form_submit(){
    $error = array();

    if ( !wp_verify_nonce( $_POST['nonce'], 'exec-nonce' ) ) {
      $error['empty_nonce'] = 'Возникли проблемы, попробуйте еще раз позже.';
    }
    if ( !$_POST['name'] ) {
      $error['name_error'] = 'Не указан name';
    }
    if ( !$_POST['phone'] ) {
  	  $error['phone_error'] = 'Не указан phone';
    }
    if ( !$_POST['agree-policy'] ) {
  	  $error['agree_policy_error'] = 'Не указан agree-policy';
    }

    if ( count( $error ) > 0 ) {
      $error['class'] = 'errors';
      $error_fin = json_encode($error, JSON_UNESCAPED_UNICODE);
      echo $error_fin;
      wp_die();
    } else {
        $email_send = exec_get_options('email_message'); // 'creat-sites@yandex.ru';
        // $admin_email = get_bloginfo('admin_email');
        $from = 'admin@execfourzero.com';
        $home_url = get_home_url() . $_POST['_wp_http_referer'];

        $mailTo = $email_send;
    	$subject = "Сообщение с сайта";
    	$headers= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-type: text/html; charset=utf-8\r\n";
    	$headers .= 'From: ' . $from . ' <' . $from . '>\r\n';
    	$msgotprav = '<h1><b>Сообщение</b></h1>';
        $msgotprav .= ( $_POST['name'] )? 'Имя: <b>' . $_POST['name'] . '</b><br>' : 'Имя: не указано<br>';
        $msgotprav .= ( $_POST['phone'] )? 'Телефон: <b>' . $_POST['phone'] . '</b><br>' : 'Телефон: не указан<br>';
        $msgotprav .= ( $_POST['email'] )? 'E-mail: <b>' . $_POST['email'] . '</b><br>' : 'E-mail: не указан<br>';
        $msgotprav .= 'Отправлено со страницы: ' . $home_url;
    	if(mail($mailTo, $subject, $msgotprav, $headers)) {
            $error['class'] = 'success';
            $error['return'] = 'Спасибо, мы отправим ответ на указанный Вами E-mail: ' . $_POST['email'] . ' в самое ближайшее время!';
            $error_fin = json_encode($error, JSON_UNESCAPED_UNICODE);
            echo $error_fin;
    	} else {
    		echo "Сообщение не отправлено!";
    	}

        // $title = wp_date( 'H:i:s d-m-Y' );
        // $post_data = array(
        //   'post_author'   => 2,
        //   'post_status'   => 'pending',
        //   'post_type'     => 'messages',
        //   'post_title'    => $title,
        //   'post_content'  => $msgotprav,
        // );
        // $post_id = wp_insert_post( $post_data );
        // if ($post_id) {
        //     $new_title = '#'.$post_id;
        //     $post_update = array(
        //         'ID'         => $post_id,
        //         'post_title' => $new_title
        //     );
        //     wp_update_post( $post_update );
        // }
        wp_die();
    }
    wp_die();
}
