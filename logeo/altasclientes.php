<?php

require "altasclientes.html";
require "conectar.php";


$connect=conectar();

$rol=$_POST['userol'];
$Nombre=$_POST['UseNombre'];
$Apellido=$_POST['useApellido'];
$email=$_POST['useEmail'];
$password=$_POST['usepassword'];
$dir=$_POST['useDireccion'];
$loc=$_POST['uselocalidad'];
$prov=$_POST['useprovincia'];
$telefono=$_POST['usetelefono']; 


$sql="INSERT INTO (userol,useNombre,useApellido,useEmail,usepassword,useDireccion,uselocalidad,useprovincia,usetelefono) VALUES ($rol,$Nombre,$email,$password,$dir,$loc,$prov,$telefono)";

$recordset=mysqli_query($connect,$sql);

$register=mysqli_fetch_assoc($recordset);
echo "rol".$userol."Nombre".$Nombre."Apellido".$Apellido."Email".$email."clave".$password."Direccion".$dir."Localidad".$loc."Provincia".$prov."telefono".$telefono;











?>