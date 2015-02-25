<?php

$name 		= $_POST['name'];
$email 		= $_POST['email'];
$phone	    = $_POST['phone'];
$message	= $_POST['message']; 

$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: $email\n";
$headers .= "Return-Path: $email\n";
 
$subject = "[Contato] Formulário do Site";

$content = 'Nome: ' . $name . '<br />';
$content .= 'Email ' . $email . '<br />';
$content .= 'Telefone: ' . $phone . '<br />';
$content .= 'Mensagem: ' . $message;

if(mail("wallace_erick@hotmail.com", $subject, $content, $headers)){
	echo "enviado";
} else {
	echo "erro"; 
}
?>