<?php
session_start();

if(isset($_SESSION['email'] && $_SESSION['rol']==1)){

}
else{
    echo "Pagina Prohibida";
    exit()
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset type="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR EASY HOUSE</title>

</head>

<link rel="stylesheet"  href="style1.css">

<link rel="stylesheet" href="css/bootstrap.min.css">


<body>

  <script src="js/bootstrap.min.js">



  </script>



  <div class="container">

<div class="row">
 <div class="col" style="background-color: aqua;">
 columna

 </div>

 <div class="col" style="background-color: blue;">
  columna
 </div>

 <div class="col" style="  background-color: blueviolet;">

  <div class="slider">
  <div class="slider__inner">
  
  <img src="jacuzzi1.jpg" width="100px" heigth="100px">
  <img src="jacuzzi2.jpg" width="100px" heigth="100px">
  <img src="jacuzzi3.jpg" width="100px" heigth="100px">
  <img src="jacuzzi4.jpg" width="100" height="100px">
  <img src="jacuzzi5.jpg" width="100px" height="100px">
 
</div>

</div>


 </div>

 <div class="col" style="background-color: yellow;">
  columna

 </div>


  </div>

  </div>


  <div class="row">
    <div class="col" style="background-color: aqua;">
    columna
   
    </div>
   
    <div class="col" style="background-color: blue;">
     columna
    </div>
   
    <div class="col" style="  background-color: blueviolet;">
   
    </div>
   
    <div class="col" style="background-color: yellow;">
     columna
   
    </div>

    <div class="row">
      <div class="col" style="background-color: aqua;">
      columna
     
      </div>
     
      <div class="col" style="background-color: blue;">
       columna
      </div>
     
      <div class="col" style="  background-color: blueviolet;">
     
      </div>
     
      <div class="col" style="background-color: yellow;">
       columna
     
      </div>

      <div class="row">
        <div class="col" style="background-color: aqua;">
        columna
       
        </div>
       
        <div class="col" style="background-color: blue;">
         columna
        </div>
       
        <div class="col" style="  background-color: blueviolet;">
       
        </div>
       
        <div class="col" style="background-color: yellow;">
         columna
       
        </div>

        <div class="row">
          <div class="col" style="background-color: aqua;">
          columna
         
          </div>
         
          <div class="col" style="background-color: blue;">
           columna
          </div>
         
          <div class="col" style="  background-color: blueviolet;">
         
          </div>
         
          <div class="col" style="background-color: yellow;">
           columna
         
          </div>

          <div class="row">
            <div class="col" style="background-color: aqua;">
            columna
           
            </div>
           
            <div class="col" style="background-color: blue;">
             columna
            </div>
           
            <div class="col" style="  background-color: blueviolet;">
           
            </div>
           
            <div class="col" style="background-color: yellow;">
             columna
           
            </div>

            <div class="row">
              <div class="col" style="background-color: aqua;">
              columna
             
              </div>
             
              <div class="col" style="background-color: blue;">
               columna
              </div>
             
              <div class="col" style="  background-color: blueviolet;">
             
              </div>
             
              <div class="col" style="background-color: yellow;">
               columna
             
              </div>

              <div class="row">
                <div class="col" style="background-color: aqua;">
                columna
               
                </div>
               
                <div class="col" style="background-color: blue;">
                 columna
                </div>
               
                <div class="col" style="  background-color: blueviolet;">
               
                </div>
               
                <div class="col" style="background-color: yellow;">
                 columna
               
                </div>


                <div class="row">
                  <div class="col" style="background-color: aqua;">
                  columna
                 
                  </div>
                 
                  <div class="col" style="background-color: blue;">
                   columna
                  </div>
                 
                  <div class="col" style="  background-color: blueviolet;">
                 
                  </div>
                 
                  <div class="col" style="background-color: yellow;">
                   columna
                 
                  </div>
         
         
       
       
     
     
       </div>
   
   
     </div>


<form action="altasproveedor.php" method=POST>
    <h1>PROVEEDOR</h1>
    <br>
<input type=text name=proveedor placeholder="Ingrese proveedor" require><br>
<h2>INGRESE CUIT</h2>
<br>
<input type=number name=cuit placeholder="ingrese cuit del prov" require><br>
<h2>DOMICILIO</h2>
<br>

<input type=text name=direccion placeholder="Ingrese direccion" require><br>
<h2>INGRESE EMAIL</h2>
<br>
<input type=number name=email placeholder="danos tu mail" require><br>
<h2>TELEFONO</h2>
<br>
<input type=text name=telefono  placeholder="ingrese telefono"><br>
<h2>ENVIAR DATOS </h2>
<input type=submit values="Enviar" require><br>

<br><br>   
<form action="altasproductos.php" method=POST>
   <h2> INGRESE NOMBRE DEL PRODUCTO :</h2><br>
    <input type=text name="producto" placeholder="ingrese el nombre del producto"><br>
  <h2> INGRESE CODIGO DEL PRODUCTO:</h2><br>
    <input type=number name=codigo placelder="ingrese el codigo"><br>
    <h2>MARCA DEL PRODUCTO</h2><br>
    <input type="text" name="marca" placeholder="Marca del producto"><br>
    <h2>MODELO DEL PRODUCTO</h2><br>
    <input type="text"  name="modelo"  placeholder="Ingrese modelo del producto" require>
   <br>
   <h2>PRECIO DEL PRODUCTO</h2><br>
   <input type=number  name=precio >="Ingrese el precio del producto" require><br>

   <h2>STOCK ACTUAL</h2><br>
   <input type=number name=stockactual placeholder="Ingrese el stock acual" require>
    <br>
    <h2>STOCK MINIMO</h2>

    <input type=number name=stockmin placeholder="Ingrese el minimo de stock " require><br>
 
     <h2>PROVEEDOR</h2>  
     <input type="text" name="proveedor"  placeholder="Cual es el proveedor" require >



   <input type=number name="precio" >
   <input type=submit values="EnviarDatos"  requiere>

</body>
</html>




