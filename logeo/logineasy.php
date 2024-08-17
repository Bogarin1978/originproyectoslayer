<?php
SESSION_START();
require "indexlogeo.html";
require "conectar.php";



$ser="localhost";
$usr="root";
$pass="";
$bdeasy="bdeasyhause";

$conect = mysqli_connect ($ser,$usr,$pass,$bdeasy) or die ( " No se conecta  a la base de datos" ) ;

if(($conect)>0){
    echo "conexion exitosa a la  base";

}else{
    echo "No hay conexion a la base";
}



$rol=$_POST['rol'];
$user=$_POST['email'];
$password=$_POST['password'];

mysqli_set_charset($conect,"utf8");



$sql="SELECT * FROM userhause WHERE useEmail='$user' ";

$resultado=mysqli_query($conect, $sql);

if(mysqli_affected_rows($conect)>0){

    $registro=mysqli_fetch_assoc($resultado);
    echo "-Respuesta :".$registro['userol']."".$registro['useNombre']."".$registro['useApellido']."".$registro['useEmail']."".$registro['usepassword'];

    if($registro['usepassword']==$password){

        echo "Hola probando Inicio de sesion";
        
        //session_start();
        

        $_SESSION['email']=$registro['useEmail'];
        $_SESSION['rol']=$registro['userol'];
        echo "prueba nro de rol ".$_SESSION['rol'];

        
        switch($_SESSION['rol']){

            case 1:

                if($_SESSION['rol']==1){   
                header("location: ../administradores.php");
                   }else{
                    echo "Error ";
                   }
            exit;
            break;
            

            case 2:

                if($_SESSION['rol']==2){  
                header("location: ../clientes.php");
                  }else{
                    echo"Error";
                  }
            exit;
            break;
            

            case 3:
                            
                default:
                echo "algo esta mal";
                exit;

        }
    }
    else{
        header("location: index.php?badpass");
        exit;
        
    }





}
else{
    header ("location: index.html?nousuario=$usuario");
    exit;
    
 }



?>