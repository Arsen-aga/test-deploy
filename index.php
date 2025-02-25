<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// https://api.telegram.org/bot7476559249:AAEp44Owvf7ds_qcELLcg2PwZImXDt8PyNI/getUpdates

define("TG_TOKEN", "7476559249:AAEp44Owvf7ds_qcELLcg2PwZImXDt8PyNI");
define("TG_USER_ID", "1137815032");


$getQuery = array(
  'chat_id' => TG_USER_ID,
  'text' => 'Сообщение с сервера',
  'parse_mode' => 'html',
);

$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);
curl_close($ch);
