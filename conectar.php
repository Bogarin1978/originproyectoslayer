
<php?
function conectar( ){
    $ser="localhost";
    $usr="root";
    $pass="";
    $bdeasy="bdeasyhouse";

    $conect = mysqli_connect ($ser,$usr,$pass,$bdeasy) or die ( " No se conecta  a la base de datos" ) ;



return $conect;

}


?>