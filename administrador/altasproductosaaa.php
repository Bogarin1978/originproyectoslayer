<?php

require "administradores.html";
$producto=$_POST['producto'];
$codigo=$_POST['codigo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$proveedor=$_POST['proveedor'];


conectar();

$sql="INSERT INTO productos(prodnombre,prodcodigo,prodmarca,prodmodelo,prodprecio,proddescripcion,prodstockautual,prodstockmin,prodproveedor) values( $producto,$codigo,$marca,$modelo,$roveedor) ;";








?>

