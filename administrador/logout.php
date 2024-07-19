<?php

session_start();
echo "hasta luego ".$_SESSION['nombre'];
session_destroy()
echo "sesion cerrada correctamente";
echo "<a href=index.php><button>iniciar sesion</button><a>"

?>