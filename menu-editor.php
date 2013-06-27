   <div class="navigation">

      
   <h1>Gestion de Usuarios</h1>
   <!-- InstanceBeginEditable name="MenuGestion" -->
	<ul>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>" target="_self">Home Litar</a></li>		
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/clientes/index.php" target="_self">Zona Clientes</a></li>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/postulantes/index.php" target="_self">Zona Postulantes</a></li>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/vendedores/index.php" target="_self">Zona Vendedores</a></li>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/supervisores/index.php" target="_self">Zona Supervisores</a></li>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/editor/index.php" target="_parent">Panel Usuarios</a></li>         
	</ul>
	<h1>Gestion de Productos</h1>
	<ul>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/editor/gestion-productos/precio-actual.php" target="_self">Actualizar Precios</a></li>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/editor/gestion-productos/restricciones-reportes.php" target="_self">Restricciones de reportes</a></li>
		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/editor/gestion-productos/restricciones-proyecciones.php" target="_self">Restricciones Fecha Proyeccines</a></li>
	</ul>
	<h1>
		<div style="margin-bottom: -22px;" >
		<?php echo $_SESSION["nombre"] ?>
		</div>
		<a class="cerrar_sesion" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/lib/cerrar-cesion.php">Cerrar Sesion</a>    
	</h1>
   <!-- InstanceEndEditable -->
  </div>