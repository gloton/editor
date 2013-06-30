<?php
	include_once '../../lib/class.php';
	require_once('phpmailer_5.2.1/class.phpmailer.php');
	header("Content-type: text/html; charset=utf-8");
	$id = $_GET["id"];
	//$link= mysql_connect("localhost","jorgew7_modal","prueba123") or die("Datos de conexion incorrectos");
	//mysql_set_charset('utf8',$link);
	//$con = mysql_select_db("jorgew7_modal",$link);
	$query = mysql_query("SELECT * FROM mails_personalizados WHERE id=".$id,Conectar::con()) or die("no se pudo ejecutar query");
	$resultado = mysql_fetch_array($query);
	//echo $resultado["contenido"];

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = "<h1>Esto es la cabecera del mail</h1>";
$body  			  = html_entity_decode($resultado["contenido"]);

$mail->AddReplyTo("j.gatica@yahoo.com","Jorge Gatica");

$mail->SetFrom('j.gatica@yahoo.com', 'Jorge Gatica');

$address = "jorge@w7.cl";
$mail->AddAddress($address, "Jorgin gatica");

$mail->Subject    = "Mail informativo";
$mail->AltBody    = "La información que le enviamos esta en html y su lector de correo no tiene activada esta capacidad"; // optional, comment out and test

$mail->MsgHTML($body);

//para adjuntar un archivo, si es que existiera
//$mail->AddAttachment("pagare.pdf");

if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	//UPDATE `litarcl_bdlitar`.`mails_personalizados` SET `estado` = '1' WHERE `mails_personalizados`.`id` =87;
	$sql_estado = "UPDATE mails_personalizados SET estado=1 WHERE id=".$id;
	mysql_query($sql_estado,Conectar::con()) or die("no se pudo ejecutar query estado");
	echo "El mail se ha enviado correctamente al cliente.";
}
?>