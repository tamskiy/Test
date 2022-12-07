<?php
//Сбор данных из полей формы. 
$phone = $_POST['tel'];

$token = "5895875205:AAHp1R3KUiJHNXHGw-gAL_cSUkT1HSwwZW4";
$chat_id = "-838558316";
$sitename = "Electronik.kz"; //Указываем название сайта

$arr = array(
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>