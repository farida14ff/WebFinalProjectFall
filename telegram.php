<?php

/* https://api.telegram.org/bot1050289082:AAEYowPRxdNvf5RRWhe0R1GTxJC_mE-T7AA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['_name_'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];
$token = "1050289082:AAEYowPRxdNvf5RRWhe0R1GTxJC_mE-T7AA";
$chat_id = "-322851899";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Тема: ' => $title,
  'Сообщение :' => $message

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>