<?php
SESSION_START();

require 'indexlogeo.html';
include 'conectar.php';


$conect;



if(($conect)>0){
    echo "conexion exitosa a la  base";

}else{
    echo "No hay conexion a la base";
}




$user=$_POST['email'];
$password=$_POST['password'];

mysqli_set_charset($conect,"utf8");



$sql="SELECT * FROM userhause WHERE useEmail='$user' and useRol = 2 ";

$resultado=mysqli_query($conect, $sql);

if(mysqli_affected_rows($conect)>0){

    $registro=mysqli_fetch_assoc($resultado);
    echo "-Respuesta :".$registro['userol']."".$registro['useNombre']."".$registro['useApellido']."".$registro['useEmail']."".$registro['usepassword'];

    if($registro['usepassword']==$password){

        echo "Hola probando Inicio de sesion";
        
        $_SESSION['email']=$registro['useEmail'];
        
       if($user==$registro['useEmail']){

         
        header('Location: clientes.php');



       }else{   
              echo"Error de usuario";

              header ("location: logineasy.php?nousuario='$usuario' ");
          
            }
          



}

    
 }
    
   
?>