<?php

$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];


$token = "807814744:AAHglXN5z1T_hqlo-y5vrTO9a5S1aW4FKAM";
$chat_id = "-477466850";
$arr = array(
    'Ответ 1: ' => $answer1,
    'Ответ 2: ' => $answer2,
    'Ответ 3: ' => $answer3,
    'Ответ 4: ' => $answer4,
    'Имя: ' => $name,
    'Телефон: ' => $phone
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