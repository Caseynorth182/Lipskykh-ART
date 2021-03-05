<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    /*$sub = $_POST["sub"];*/
    $message = $_POST['message'];
    $error = '';
    if(!$name) {$error .= 'Укажите свое имя. ';}
    if(!$email) {$error .= 'Укажите электронную почту. ';}
   /* if(!$sub) {$error .= 'Укажите тему обращения. ';}*/
    if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
    if(!$error) {
        $address = "caseynorth182@gmail.com"; // ВНИМАНИЕ! Здесь указываем адрес электронной почты, на которую будут приходить письма
        $mes = "Имя: ".$name."\n\nТема: " ."\n\nСообщение: ".$message."\n\n";
        $send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
        if($send) {echo 'OK';}
    }
    else {echo '<div class="err">'.$error.'</div>';}
}