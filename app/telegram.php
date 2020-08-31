<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$service = $_POST['user_service'];

$token = "807814744:AAHglXN5z1T_hqlo-y5vrTO9a5S1aW4FKAM";
$chat_id = "-477466850";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон пользователя: ' => $phone,
    'Услуга: ' => $service
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>