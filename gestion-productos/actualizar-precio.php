<?php 
require_once("../../lib/class.php");
foreach ($_POST as $nombre => $valor) {
	$sql= "UPDATE productos SET precio='$valor' WHERE nombre_form='$nombre'";
	mysql_query($sql,Conectar::con()) or die(mysql_error());
}

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Actualizando Precios</title>
</head>

<body>
<script type="text/javascript">
	history.back();
</script>
</body>
</html>
