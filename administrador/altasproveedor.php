<?php
require "administradores.html";
require "conectar.php";

$proveedor=$_POST['proveedor'];
$cuit=$_POST['cuit'];
$proveedor=$_POST['direccion'];
$proveedor=$_POST['telefono'];

conectar();

$sql="INSERT INTO  proveedores (proveNombre,provecut,provecategoria,provedireccion,proveemail,provetelefono) values ($proveedor,$cuit,$direccion,$telefono;";

$recordset=mysqli_query($sql);

if(mysqli_affected_row($recordset)>0){

    echo "El administrador ".$recordset."fue cargado correctamente";

}else{

    echo"No se pudo cargar el proveedor
}











?>