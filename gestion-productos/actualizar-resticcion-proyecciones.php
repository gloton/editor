<?php
require_once("../../lib/class.php");
	$sql= "UPDATE `fechas_limites` SET `fecha_limite` = ".$_GET["fecha_limite"]." WHERE `fechas_limites`.`id_fechas_limites` =2;";
	//$sql= "UPDATE `jorgew7_litarp`.`horarios` SET `horainicio` = ".$_GET["horainicio"].", `horafin` = ".$_GET["horafin"]." WHERE `horarios`.`id_horario` =2;";
	mysql_query($sql,Conectar::con()) or die(mysql_error());
	echo 'Datos actualizados' ;
?>
