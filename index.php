<?php


session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* establecer la caducidad de la caché a 30 minutos */
session_cache_expire(1);
$cache_expire = session_cache_expire();


session_start();

$_SESSION['nombre']="Macario";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1><a href="pagina.php">Hola</a> </h1>

</body>
</html>