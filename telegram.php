<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "6994333811:AAEGZf1tPQjeU_YDQwKSRZMy_ceDa5kfV7s";
$chat_id = "-2081564152";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: success.html');
} else {
  echo "Error";
}
?>