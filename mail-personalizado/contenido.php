<?php 
	header("Content-type: text/html; charset=utf-8");
	include_once '../../lib/class.php';
	$sql_productos_mail = "SELECT * FROM mails_personalizados;";
	$query_productos_mail = mysql_query($sql_productos_mail, Conectar::con()) or die("No se realizo la consulta");
		
	$id = $_GET["id"];

	$query = mysql_query("SELECT contenido FROM mails_personalizados WHERE id=".$id);
	$resultado = mysql_fetch_array($query) or die("No se pudo ejecutar la query");
	//echo $resultado["contenido"];
	echo html_entity_decode($resultado["contenido"]);
	
?>