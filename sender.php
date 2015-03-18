<?php

$name 		= $_POST['name'];
$email 		= $_POST['email'];
$phone	    = $_POST['phone'];
$message	= $_POST['message']; 

$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: $email\n";
$headers .= "Return-Path: $email\n";
 
$subject = "Contato pelo Site";

$content = '<img src="http://www.wallaceerick.com.br/content/images/logo-dark.png" width="200" alt="Wallace Erick | Desenvolvedor Front-End" /><br />';
$content .= '<span style="color: #2c2c2c;">Nome:</span> <span style="color: #7b7b7b;">' . $name . '</span><br />';
$content .= '<span style="color: #2c2c2c;">Email:</span> <span style="color: #7b7b7b;">' . $email . '</span><br />';
$content .= '<span style="color: #2c2c2c;">Telefone:</span> <span style="color: #7b7b7b;">' . $phone . '</span><br />';
$content .= '<span style="color: #2c2c2c;">Mensagem:</span> <span style="color: #7b7b7b;">' . $message . '</span>';

if(mail('wallace_erick@hotmail.com', $subject, $content, $headers)){
	echo 'enviado';
}
else {
	echo 'erro'; 
}
?>