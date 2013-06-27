<?php 
include_once '../../lib/class.php';
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
			background-color: #C9F235;
			color: #FFFFFF;
		
		}
		.table-striped tbody > tr:nth-child(2n+1) > td, .table-striped tbody > tr:nth-child(2n+1) > th {
			color: #FFFFFF;
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
							<td><?php echo $fila["nombre_remitente"]; ?></td>
							<td><?php echo $fila["mail_remitente"]; ?></td>
							<td><?php echo $fila["nombre_destinatario"]; ?></td>
							<td><?php echo $fila["mail_destinatario"]; ?></td>
							<td style="text-align: center;">
								<a class="btn" href="">
									<i class="icon-comment"></i>
									Ver
								</a>
							</td>
						</tr>
					<?php endwhile; ?>
					</tbody>
				</table>			
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://<?php echo $servidor;?>lib/bootstrap/js/bootstrap.js"></script>
</body>
</html>