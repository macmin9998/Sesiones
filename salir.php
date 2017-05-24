<?php

session_start();


unset($_SESSION['nombre']);

session_destroy();

?>


<a href="pagina.php">regresar a pagina </a>