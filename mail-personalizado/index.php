<?php 
include_once '../../lib/class.php';
if ($_SESSION["id_perfil"]!=3) {
	echo '
			<script type="text/javascript">
				alert("No tiene permisos para acceder");
				location.href="http://www.litar.cl";
			</script>
			' ;	
}
$sql_productos_mail = "SELECT * FROM mails_personalizados;";
$query_productos_mail = mysql_query($sql_productos_mail, Conectar::con()) or die("No se realizo la consulta");
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Administrador mail personalizados</title>
		<link rel="stylesheet" type="text/css" href="http://<?php echo $servidor;?>lib/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="http://<?php echo $servidor;?>lib/bootstrap/css/bootstrap-responsive.css" />
		<script type="text/javascript">
			function preview(int){
				document.getElementById('btn_enviar').value = int;
				var conexion;
				if (window.XMLHttpRequest)			  {
				  conexion=new XMLHttpRequest();
				}else
				  {
				  conexion=new ActiveXObject("Microsoft.XMLHTTP");
				}
				conexion.onreadystatechange=function(){
					if(conexion.readyState==4 && conexion.status==200){
						document.getElementById("midiv").innerHTML=conexion.responseText;
						document.getElementById("btn_enviar").style.display="inline";
					}
				}
				conexion.open("GET","contenido.php?id="+int,true);
				conexion.send();
			}
			function enviarmail(int){
				var conexion;
				if (window.XMLHttpRequest)			  {
				  conexion=new XMLHttpRequest();
				}else
				  {
				  conexion=new ActiveXObject("Microsoft.XMLHTTP");
				}
				conexion.onreadystatechange=function(){
					if(conexion.readyState==4 && conexion.status==200){
						document.getElementById("midiv").innerHTML=conexion.responseText;
						document.getElementById("btn_enviar").style.display="none";
					}
				}
				conexion.open("GET","enviar-mail.php?id="+int,true);
				conexion.send();
			}
		</script>		
		<style type="text/css">
			body {
				color: #467302;
				background-image: url("images/pw_maze_white.png");
			}
			.container table.table {
				background-color: #FFFFFF;
			}
			.table-striped tbody > tr:nth-child(2n+1) > td, 
			.table-striped tbody > tr:nth-child(2n+1) > th {
				background-color: #72A603;
			}
			.table-hover tbody tr:hover > td, .table-hover tbody tr:hover > th {
				background-color: #ABD650;
				color: #FFFFFF;
			
			}
			.table-striped tbody > tr:nth-child(2n+1) > td, .table-striped tbody > tr:nth-child(2n+1) > th {
				color: #FFFFFF;
			}
			.table td {
			  background-color: #B8EF43;
			}
			.table th {
			  background-color: #FFFFFF;
			}
		</style>	
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="span12">
					<table class="table table-striped table-bordered table-hover">
	        			<thead>
							<tr>
								<th>#</th>
								<th>Estado</th>
								<th>Nombre remitente</th>
								<th>Mail remitente</th>
								<th>Nombre destinatario</th>
								<th>Mail destinatario</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
						<?php while ($fila=mysql_fetch_array($query_productos_mail)) : ?>
							<tr>
								<td><?php echo ++$i; ?></td>
								<td style="text-align: center;">
									<?php if ($fila["estado"]== 0) : ?>
									<i class="icon-share icon-white"></i>
									<?php else : ?>
									<i class="icon-check icon-white"></i>
									<?php endif; ?>
								</td>
								<td><?php echo $fila["nombre_remitente"]; ?></td>
								<td><?php echo $fila["mail_remitente"]; ?></td>
								<td><?php echo $fila["nombre_destinatario"]; ?></td>
								<td><?php echo $fila["mail_destinatario"]; ?></td>
								<td style="text-align: center;">
									<button data-toggle="modal" href="#example" class="btn" value="<?php echo $fila["id"]; ?>" onclick="preview(this.value);">
										<i class="icon-comment"></i>
										Ver
									</button>
								</td>
							</tr>
						<?php endwhile; ?>
						</tbody>
					</table>			
				</div>
			</div>
		</div>
		<!-- inicio ventana modal -->
		<div id="example" class="modal hide fade in" style="display: none;">
			<div class="modal-header">
				<a data-dismiss="modal" class="close">×</a>
				<h3>Preview de Mail Personalizado</h3>
			</div>
			<div id="midiv" class="modal-body">
				<!-- inicio conetenido -->               
				<!-- fin conetenido -->               
		    </div>
		    <div class="modal-footer">
		        <button id="btn_enviar" class="btn btn-success" value="0" onclick="enviarmail(this.value);">Enviar</button>
		        <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
		    </div>
		</div>
		<!-- fin ventana modal -->
		<!-- 
		<script type="text/javascript" src="http://<?php echo $servidor;?>lib/bootstrap/js/bootstrap.js"></script>
		 -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" ></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap-modal.js"></script>
	</body>
</html>