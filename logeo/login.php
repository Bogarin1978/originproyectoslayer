<?php
$usuario=$_POST['usuario'];
$pass=$_POST['password'];

require "conectar.php";

$conn=conectar();

$sql="select * from usuarios where usuario='$usuario';";

$resultados=mysqli_query($conect, $sql);

if(mysqli_affected_rows($conn)>0){
    $registro=mysqli_fecth_assoc($resultado);

    if($registro['pass']==$pass){
        
        session_start();

        $_SESSION['id']=$registro['id'];
        $_SESSION['nombre']=$registro['nombre']." ".$registro['apellido'];
        $_SESSION['usuario']=$registro['usuario']
        $_SESSION['tipo']=$registro['rol'];

        swicth($_SESSION['tipo']){
            case 1:
                header("location: admin.php")
            break

            case 2:
                header("location;cliente.php")
            break

            case 3:
                            
                default:
                echo "algo esta mal";

        }
    }
    else{
        header("locatiion: index.php?badpass")
    }


}
 else{
    header ("location: index.php?nousuario=$usuario");
 }
?>