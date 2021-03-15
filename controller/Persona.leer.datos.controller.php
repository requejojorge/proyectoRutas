<?php

try {
    require_once '../logic/Persona.class.php';
    require_once '../util/functions/Helper.class.php';
    
//    if 
//        (
//            !isset($_POST["p_cod_lab"]) ||
//            empty($_POST["p_cod_lab"])
//            
//        )
//    {
//            Helper::imprimeJSON(500, "Falta completar datos", "");
//            exit();
//    }
//    
    $id = $_POST["p_id"];            
    $obj = new Persona();
    $resultado = $obj->leerDatos_persona($id);
    
    Helper::imprimeJSON(200, "", $resultado);
    
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}


