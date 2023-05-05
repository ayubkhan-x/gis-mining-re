<?php

// Отправка письма
if(isset($_POST)) {

    /*amo*/
    require_once $_SERVER["DOCUMENT_ROOT"]."/amo/amo.php";
    /*amo*/

    $email = (isset($_POST['email']) ? $_POST['email'] : "");
    $to      = 'gismaining@yandex.ru, glazkis@yandex.ru'; // тут указываем адрес КОМУ мы отправляем письмо
    $subject = 'Заявка c сайта 4-btc.com'; // тема письма
    $br = "<br/>";    
    $val = '<b>Имя:</b> '.$_POST['name'].$br;
    $phone = '<b>Телефон:</b> '.$_POST['tel'].$br;	
    //$email_message = '<b>email:</b> '.$email.$br;

    $headers  = "Content-type: text/html;\r\n";
    $headers .= 'From: webmaster@4-btc.com' . "\r\n" .
        'Reply-To: webmaster@4-btc.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message =
        $val
        .$phone; // собственно, само письмо
    if ( mail($to, $subject, $message, $headers)){
        $log = "\n------------------------\n";
        $log .= date("Y.m.d G:i:s") . "\n";
        $log .= (strlen($subject) > 0 ? $subject : 'DEBUG') . "\n";
        $log .= print_r($message, 1);
        $log .= "\n------------------------\n";
        file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
    } else{
        $log = "\n------------------------\n";
        $log .= date("Y.m.d G:i:s") . "\n";
        $log .= (strlen($subject) > 0 ? $subject : 'DEBUG') . "\n";
        $log .= print_r($message, 1);
        $log .= "\n------------------------\n";
        file_put_contents(getcwd() . '/hook_error.log', $log, FILE_APPEND);
    }
}