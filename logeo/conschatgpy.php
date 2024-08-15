<?php

// Construcción de la sentencia SQL
$sql = "INSERT INTO userhause (userol, useNombre, useApellido, useEmail, usepassword, usedireccion, uselocalidad, useprovincia, usetelefono) 
VALUES ('$rol', '$Nombre', '$Apellido', '$email', '$password', '$dir', '$loc', '$prov', '$telefono')";

// Ejecución de la consulta
if (mysqli_query($conect, $sql)) {
    echo "Nuevo registro insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conect);
}

// Consulta SELECT
$consulta = "SELECT * FROM userhause";
$recordset = mysqli_query($conect, $consulta);

if (mysqli_num_rows($recordset) > 0) {
    // Procesar resultados
    while($row = mysqli_fetch_assoc($recordset)) {
        // Hacer algo con cada fila
        echo "ID: " . $row["id"]. " - Nombre: " . $row["useNombre"]. " " . $row["useApellido"]. "<br>";
    }
} else {
    echo "0 resultados";
}


//conexion a base de datos y consulta select a la tabla de PHIND


$conWebService = mysqli_connect("localhost", "usuario", "contraseña", "nombre_base_de_datos");

if (!$conWebService) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "SELECT columna1, columna2 FROM nombre_tabla";

$resultado = mysqli_query($conWebService, $sql);

if (mysqli_affected_rows($resultado) > 0) {
    // Mostrar los datos de cada fila
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo "columna1: " . $fila["columna1"]. " - columna2: " . $fila["columna2"]. "<br>";
    }
} else {
    echo "0 resultados";
}

mysqli_close($conWebService);





?>