<?php 
require_once("../../lib/class.php");
if ($_SESSION["id_perfil"]==3) {
	$sql = "SELECT * FROM productos";
	$result = mysql_query($sql,Conectar::con()) or die(mysql_error());
	
	$sql_horario = "SELECT * FROM horarios WHERE id_horario=2";
	$consult_horario = mysql_query($sql_horario,Conectar::con()) or die(mysql_error());
	$result_horario = mysql_fetch_array($consult_horario);
	//echo $result_horario["horafin"];
	//echo $result_horario["horainicio"];
	//exit();
	/*
	echo '<pre>';
	var_dump($result_horario);
	echo '</pre>';
	exit();
	*/
	/*
	$id_usuario = $_SESSION["id_usuario"];
	$sql_restr_repdiario = "SELECT horario_rep_diario FROM usuarios WHERE id_usuario=".$id_usuario."";
	$result_restr_repdiario = mysql_query($sql_restr_repdiario,Conectar::con()) or die(mysql_error());
	$restringido = mysql_fetch_array($result_restr_repdiario);
	//echo $restringido["horario_rep_diario"];
	if ($restringido == 1) {
		$mostar = "block";
	} else {
		$mostar = "none";
	}
	*/
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Litar Biotecnol&oacute;gica - Gestion de productos</title>
<link rel="stylesheet" type="text/css" href="../../default_interior.css" media="screen"/>
<script src="http://www.litar.cl/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">

function ejecutarajax (inicio,fin) {
     var conexion;
     if (window.XMLHttpRequest) {
          //para los navegadores modernos
          conexion = new XMLHttpRequest();
     } else {
          //para las versiones antiguas de internet explorer
          conexion = ActiveXObject("Microsoft.XMLHTTP");
     }
     conexion.open("GET","actualizar-resticcion-reportediario.php?horainicio="+inicio+"&horafin="+fin+"",true);
     conexion.send();
     conexion.onreadystatechange=function(){
          if (conexion.readyState==4 && conexion.status==200) {
               document.getElementById("mensajerep").innerHTML=conexion.responseText;
          }
     }
}
</script>
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
      <div class="content" style="background-color: #FFFFFF;">
        <h1 align="center">Gestión de productos</h1>
		<div class="body" id="tema1_contenido">
			<form name="frm_restr_horario">
				<table width="196" border="1">
				    <caption>
				        Restricción Reporte Diario
				    </caption>
				    <tr>
				        <th width="90" scope="col">Hora inicio</th>
				        <th width="90" scope="col">Hora fin</th>
			        </tr>
				    <tr>
				        <td><input id="horainicio" name="horainicio" type="text" value="<?php echo $result_horario["horainicio"]; ?>" /></td>
				        <td><input id="horafin" name="horafin" type="text" value="<?php echo $result_horario["horafin"]; ?>" /></td>
			        </tr>
				    <tr>
				        <td colspan="2">Ingresar numero entre 0 y 23</td>
			        </tr>
				    <tr>
				        <td><button type="button" style="display: <?php echo $mostar; ?>" onclick="ejecutarajax(document.getElementById('horainicio').value,document.getElementById('horafin').value);" />Actualizar</button></td>
				        <td><div id="mensajerep" class="mensajerep" style="text-align: center;" ></div></td>
			        </tr>
				</table>
			</form>
        <p style="padding: 14px;">Solo se podra enviar reportes entre la <strong>Hora de inicio</strong> y la <strong>Hora de fin</strong></p>
        <p style="padding: 14px;">Ejemplo; hora de inicio 8 y hora de fin 15, significa que el reporte se podra enviar despues de las 8 y hasta las 15:59</p>			
		</div><!--fin clase body-->
      </div>
    </div>
    <div class="item"></div>
  </div>
  <div class="navigation">
    <h1>Menu</h1>
    <ul>
      <li><a  href="../" target="_self">Panel de usuario</a></li>
      <li><a href="javascript:void(0);" target="_self">Accion 2</a></li>
      <li><a href="javascript:void(0);" target="_self">Accion 3</a></li>
      <li><a href="javascript:void(0);" target="_self">Accion 4</a></li>
      <li><a href="javascript:void(0);" target="_self">Accion 5</a></li>
      <li><a href="javascript:void(0);" target="_self">Accion 6</a></li>
      <li><a href="javascript:void(0);" target="_self">Accion 7</a></li>
    </ul>
    <h1>&nbsp;</h1>
   </div>
  <div class="clearer"><span></span></div>
  <div class="footer">&copy; 2008 Litar Biotecnol&oacute;gica. Todos los Derechos Reservados </div>
</div>
<img id="background-img" class="bg" src="http://www.litar.cl/img/fondo.jpg" />
</body>
</html>
<?php 
}	
?>