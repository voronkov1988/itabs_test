<?php
$mail = $_POST;
$file = file_get_contents('mails.json');
$taskList = json_decode($file,TRUE);
unset($file);
$taskList[] = $mail;
file_put_contents('mails.json',json_encode($taskList));
unset($taskList);
var_dump(file_get_contents('mails.json'));