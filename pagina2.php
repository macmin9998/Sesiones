<?php


session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* establecer la caducidad de la caché a 30 minutos */
session_cache_expire(1);
$cache_expire = session_cache_expire();


session_start();
if (isset($_SESSION['nombre'])) {
	echo "Mostrar variable ".$_SESSION['nombre'];

}else {

	echo "no hay sesion";
}






?>
<a href="pagina.php">regresa</a>
