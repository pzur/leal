<?php
return  'Hola'
if ($_POST['email']) {
	$name = $_POST['name'];
	$client = $_POST['email'];
	$mensaje = $_POST['message'];
	$subject = $_POST['subject'];

	$to = "alvarochico.a@gmail.com";

	mail($to, $subject, $mensaje, 'From: '.$client);
}

return 'Si termino'
