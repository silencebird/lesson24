<?php


function getStyle() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'getStyle');

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() .  '/ajax-script.js', array('jquery') );

    wp_localize_script(
        'ajax-script',
        'ajax_object',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'send_letter' )


        )
    );
});


add_action( 'wp_ajax_send_letter', 'send_letter' );
add_action('wp_ajax_nopriv_send_letter', 'send_letter');

function my_action() {
    $nonce = $_POST['nonce'];
    if ( !wp_verify_nonce( $nonce, 'send_letter' ) ) {
        echo('Get out robot');
    } else {
            $name = $_POST['name'];

            $email = $_POST['email'];

            $comments = $_POST['comments'];

            $emailTo = get_option('admin_email');
            $subject = 'Повідомлення з сайту від '.$name;
            $body = "Імя: $name \n\nE-mail: $email \n\nПовідомлення: $comments";
            $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
            wp_mail($emailTo, $subject, $body, $headers);

        wp_die();
    }
}
//if(isset($_POST['submitted'])) {
//    if (trim($_POST['contactName']) === '') {
//        $nameError = 'Please enter your name.';
//        $hasError = true;
//    } else {
//        $name = trim($_POST['contactName']);
//    }
//
//    if (trim($_POST['email']) === '') {
//        $emailError = 'Please enter your email address.';
//        $hasError = true;
//    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
//        $emailError = 'You entered an invalid email address.';
//        $hasError = true;
//    } else {
//        $email = trim($_POST['email']);
//    }
//
//    if (trim($_POST['comments']) === '') {
//        $commentError = 'Please enter a message.';
//        $hasError = true;
//    } else {
//        if (function_exists('stripslashes')) {
//            $comments = stripslashes(trim($_POST['comments']));
//        } else {
//            $comments = trim($_POST['comments']);
//        }
//    }
//
//    if (!isset($hasError)) {
//        $emailTo = get_option('tz_email');
//        if (!isset($emailTo) || ($emailTo == '')) {
//            $emailTo = get_option('admin_email');
//        }
//        $subject = '[PHP Snippets] From ' . $name;
//        $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
//        $headers = 'From: ' . $name . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;
//
//        wp_mail($emailTo, $subject, $body, $headers);
//        $emailSent = true;
//    }
//}
////}
//}


