<?php

require_once '../logic/Vehiculo.class.php';
require_once '../util/functions/Helper.class.php';

try {
    $obj = new Vehiculo();
    $resultado = $obj->lista_vehiculos_choferes_activos();
    Helper::imprimeJSON(200, "", $resultado);
    
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}

