<?php

$db = mysqli_connect('localhost', 'root', '', 'appsalon');
$db->set_charset('utf8');


if(!$db) {
    echo "Error en la conexión";
    exit;
}



//  echo "Conexión correcta";