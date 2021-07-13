<?php
function obtenerServicios() : array {
    try {
        
        // Importar una conexión
        require 'database.php';


        // Escribir el código SQL
        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql); //consulta base de datos

        // Arreglo vacío
        $servicios = [];

        $i = 0;

        // Obtener los resultados
        while( $row = mysqli_fetch_assoc($consulta) ) {
            $servicios[$i]['id'] = $row["id"];
            $servicios[$i]['nombre'] = $row["nombre"];
            $servicios[$i]['precio'] = $row["precio"];

            $i++;
        }

        // echo "<pre>";
        // var_dump( json_encode($servicios));
        // echo "</pre>";

        return $servicios;


    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();