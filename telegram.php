<?php

$name = $_POST['name'];
$email = $_POST['email'];

$token = "6037253808:AAEaptQ5OzUlyK5Guw3wARiGECbFGS_r8K0";
$chat_id = "-865390547";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
