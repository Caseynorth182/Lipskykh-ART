<?php
function send_mail() {

/* Забираем отправленные данные */
$client_fio = $_POST['client_fio'];
$client_mail = $_POST['client_mail'];
$client_quest = $_POST['client_quest'];

/* Отправляем нам письмо */
$emailTo = 'admin@test.com';
$subject = 'Test mail рассылки!';
$headers = "Content-type: text/html; charset=\"utf-8\"";
$mailBody = "$client_fio <br/><br/> $client_mail <br/><br/> $client_quest";

wp_mail($emailTo, $subject, $mailBody, $headers);

/* Создаем новый пост-письмо */
$post_data = array(
'post_title'    => $client_fio,
'post_content'  => $client_quest . '<br/>' .$client_mail,
'post_status'   => 'publish',
'post_author'   => 1,
'post_type' => 'mail',
);

wp_insert_post( $post_data );

/* Завершаем выполнение ajax */
die();

}

add_action("wp_ajax_send_mail", "send_mail");
add_action("wp_ajax_nopriv_send_mail", "send_mail");