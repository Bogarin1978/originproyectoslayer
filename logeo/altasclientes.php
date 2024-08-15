<?php

require "altasclientes.html";
require "conectar.php";


$ser="localhost";
$usr="root";
$pass="";
$bdeasy="bdeasyhause";

$conect = mysqli_connect($ser,$usr,$pass,$bdeasy) or die ( " No se conecta  a la base de datos" ) ;



//$co=conectar();

if(($conect)>0){
    echo "conexion exitosa a la  base";

}else{
    echo "No hay conexion a la base";
}


$rol=$_POST['userol'];
$Nombre=$_POST['useNombre'];
$Apellido=$_POST['useApellido'];
$email=$_POST['useEmail'];
$password=$_POST['usepassword'];
$dir=$_POST['usedireccion'];
$loc=$_POST['uselocalidad'];
$prov=$_POST['useprovincia'];
$telefono=$_POST['usetelefono']; 

//$connect=conectar();

$sql="INSERT INTO userhause (userol,useNombre,useApellido,useEmail,usepassword,usedireccion,uselocalidad,useprovincia,usetelefono) VALUES ('$rol','$Nombre','$Apellido','$email','$password','$dir','$loc','$prov','$telefono')";

$consulta="SELECT * FROM  userhause";

$recordset=mysqli_query($conect,$sql);



if($recordset>0){

echo "Se cargo el cliente en base de datos__";

echo "rol".$rol."Nombre".$Nombre."Apellido".$Apellido."Email".$email."clave".$password."Direccion".$dir."Localidad".$loc."Provincia".$prov."telefono".$telefono;

}else{

    echo "No se cargo el cliente";

}










?>