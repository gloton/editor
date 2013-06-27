<?php 
require_once("../../lib/class.php");
if ($_SESSION["id_perfil"]==3) {
	$sql = "SELECT * FROM productos";
	$result = mysql_query($sql,Conectar::con()) or die(mysql_error());
}	
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Litar Biotecnol&oacute;gica - Gestion de productos</title>
<link rel="stylesheet" type="text/css" href="../../default_interior.css" media="screen"/>
<script src="http://www.litar.cl/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
 <div class="container">
	<div class="top">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		 <tr>
		  <td rowspan="2" scope="col"><img src="http://www.litar.cl/img/logo-litar78px.png" width="78" height="59" /></td>
		  <td scope="col" width="75" align="center" valign="bottom">
			<img src="http://www.litar.cl/img/home.png" width="32" height="32" alt="Contacto" />
		  </td>
		  <td scope="col" width="75" align="center"  valign="bottom">
			<img src="http://www.litar.cl/img/mail.png" width="32" height="32" alt="Contacto" />
		  </td>
		 </tr>
		 <tr>
		  <th scope="col" valign="top"><a href="http://www.litar.cl">Home</a></th>
		  <th scope="col" valign="top"><a href="http://www.litar.cl/contacto.html">Contacto</a></th>
		 </tr>
		</table>
	</div><!--fin top-->
	<div class="header">
		<script type="text/javascript">
	AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','830','height','237','src','http://www.litar.cl/animaciones/animacion01','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','http://www.litar.cl/animaciones/animacion01' ); //end AC code
	</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="830" height="237">
		  <param name="movie" value="http://www.litar.cl/animaciones/animacion01.swf" />
		  <param name="quality" value="high" />
		  <embed src="http://www.litar.cl/animaciones/animacion01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="830" height="237"></embed>
		</object></noscript>
	  </div><!--Fin header-->
  <div class="main">
    <div class="item">
      <div class="date">
        <div>
		
		<script languaje="JavaScript">

var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado")
var montharray=new Array("Enero","Feb","Mar","Abr","May","Jun","Jul","Ago","Sept","Oct","Nov","Dic")
document.write("<normal><font color='ffffff' face='Arial'>  "+daym+" de "+montharray[month]+" </font></small>")
</script>
		</div>
      </div>
      <div class="content">
        <h1 align="center">Gestión de productos</h1>
		<div class="body" id="tema1_contenido"  style="height: 270px; background-color: #FFFFFF;">
			<h2>PROBANDO CONTENIDO</h2>
			<form name="frm_listaprecios" action="actualizar-precio.php" method="post">
			<table style="width: 400px;" border="1">
				<tr>
					<th>Nombre del producto</th>
					<th>Precio</th>
				</tr>
				<?php 
					while ($fila = mysql_fetch_array($result)) {
				?>
				<tr>
					<td><?php echo $fila["nombre"]; ?></td>
					<td style="text-align: center;"><input name="<?php echo $fila["nombre"]; ?>" id="<?php echo $fila["id_producto"]; ?>" type="text" value="<?php echo $fila["precio"]; ?>" style="text-align: right; width: 200px" /></td>
				</tr>
				<?php
					}
				?>
			</table>
				<input type="submit" value="Enviar" />
			</form>				
		</div><!--fin clase body-->
      </div>
    </div>
    <div class="item"></div>
  </div>
  <div class="navigation">
    <h1>Menu</h1>
    <ul>
      <li><a  href="javascript:void(0);" target="_parent">Actualizar productos</a></li>
      <li><a href="javascript:void(0);" target="_parent">Accion 2</a></li>
      <li><a href="javascript:void(0);" target="_parent">Accion 3</a></li>
      <li><a href="javascript:void(0);" target="_parent">Accion 4</a></li>
      <li><a href="javascript:void(0);" target="_parent">Accion 5</a></li>
      <li><a href="javascript:void(0);" target="_parent">Accion 6</a></li>
      <li><a href="javascript:void(0);" target="_parent">Accion 7</a></li>
    </ul>
    <h1>&nbsp;</h1>
   </div>
  <div class="clearer"><span></span></div>
  <div class="footer">&copy; 2008 Litar Biotecnol&oacute;gica. Todos los Derechos Reservados </div>
</div>
<img id="background-img" class="bg" src="http://www.litar.cl/img/fondo.jpg" />
</body>
</html>