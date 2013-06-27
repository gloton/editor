<?php
require_once("../../lib/class.php");
/*
print_r($_POST);
exit();
*/
	$sql= "UPDATE `horarios` SET `horainicio` = ".$_GET["horainicio"].", `horafin` = ".$_GET["horafin"]." WHERE `horarios`.`id_horario` =2;";
	mysql_query($sql,Conectar::con()) or die(mysql_error());
	echo 'Datos actualizados' ;
?>
