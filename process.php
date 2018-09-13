<?php
	if (isset($_POST['fname'])){

		$fname=htmlentities($_POST['fname']);
		$email=htmlentities($_POST['email']);
		$phone=htmlentities($_POST['phone']);
		$subject=htmlentities($_POST['subject']);
		$cameras=htmlentities($_POST['cameras']);
		$state=htmlentities($_POST['state']);

		$customer=htmlentities($_POST['customer']);


		$message1=htmlentities($_POST['message1']);

		$estado = $_POST["estado"];



		
	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
	$message = '';
	$message .= '<h4>New message from '.$estado. ':</h4> ';
	$message .= '<p>Name: '.$fname.'</p> ';
	$message .= '<p>Email: '.$email.'</p> ';
	$message .= '<p>Phone: '.$phone.'</p> ';
	$message .= '<p>Subject: '.$subject.'</p> ';
	$message .= '<p>State: '.$state.'</p> ';
	$message .= '<p>Number of cameras: '.$cameras.'</p> ';

	$message .= '<p>Interested in: </p>';





     if(isset($_POST['interested']) and $_POST['interested']!="") {

     	$interestedTodas = $_POST['interested'];
$num1 = count($interestedTodas);

	for ($n=0; $n<$num1; $n++) {
		  $message .= $interestedTodas[$n];
		  $message .= "<br>";
		}


}





	$message .= '<p>Customer Type: '.$customer.'</p>';

	$message .= '<p>Message: '.$message1.'</p> ';

	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";

	$header .= "X-MSMail-Priority: normal\n";
	$header .= "Return-Path: ".$email."\r\n";
	$header .= "Reply-To: ".$email."\r\n";

	$header .= "From: ". $fname . " <" . $email . ">\r\n";
	$email='sales@hipcam.com';
	//$email = 'danferweb@gmail.com';




	 if (mail($email,$subject,$message,$header)){
		echo 'success'; 



	}	 else {
		echo 'No se pudo enviar el mensaje.';
	} 



	
	}
?>