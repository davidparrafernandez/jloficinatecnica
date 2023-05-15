<?php 
if(isset($_POST['nombre'])){
	if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
		$nombre = $_POST['nombre'];
	    $asunto = $_POST['asunto'];
		$msg = $_POST['msg'];
		$email = $_POST['email'];
	    $header ="From: davidovi490@gmail.com" . "\r\n";
		$header ="Reply - To:davidovi490@gmail.com" . "\r\n";
		$header .= "X-Mailer: PHP/" . phpversion();
		$mail = @mail($email,$asunto,$msg,$asunto);
		
		if ($mail) {
			echo "<h4> ¡Enviado! </h4>"; 
		}
	}

}
 ?>