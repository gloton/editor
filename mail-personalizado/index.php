<?php 
include_once '../../lib/class.php';
include_once '../../lib/class.php';
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
			background-color: #C9F235;
		}
	</style>	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12">
				<table class="table table-striped table-bordered">
        			<thead>
						<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Usuario</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>			
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://<?php echo $servidor;?>lib/bootstrap/js/bootstrap.js"></script>
</body>
</html>