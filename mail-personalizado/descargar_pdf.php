<?php
//si no existe o si esta vacia
if (!isset ($_GET['file']) || empty($_GET['file' ])) {
	exit();
}
//directorio donde se alojan los archivos
//$root = "./demo_products/";
$root = "./media/";

//se obtiene el nombre del archivo
$file = basename($_GET['file']);

//se obtiene la ruta completa al archivo
$path = $root.$file;
$type = '';

//si existe la ruta
if (is_file($path)) {
	$size = filesize($path);
	if (function_exists('mime_content_type' )) {
		$type = mime_content_type($path);
	} else if (function_exists('finfo_file' )) {
		$info = finfo_open(FILEINFO_MIME);
		$type = finfo_file($info, $path);
		finfo_close($info);
	}
	if ($type == '' ) {
		$type = "application/force-download" ;
	}
	// Set Headers
	header( "Content-Type: $type" );
	header( "Content-Disposition: attachment; filename= $file");
	header( "Content-Transfer-Encoding: binary" );
	header( "Content-Length: " . $size);
	// Download File
	readfile($path);
} else {
	echo $path;
	echo "<br />";
	die("El archivo no existe !!" );
}

?>