<?php 

define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');


function debuger($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

//Escapa / Sanitizar el HTML

function sanitizar($html){
    $sanitizar = htmlspecialchars($html);
    return $sanitizar;
}

function validarORedireccionar (string $url){
    // Obtengo el id seleccionado 
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header("location: ${url}");
    }
    return $id;
}
