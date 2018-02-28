<?php
function loadClasses($className){

    $className = substr($className, strrpos($className, '\\') + 1);
    if(file_exists('src/'.$className.'.php')){
        include_once 'src/'.$className.'.php';
    }
    if(file_exists('src/ConsultaDisponibilidadProducto/'.$className.'.php')){
        include_once 'src/ConsultaDisponibilidadProducto/'.$className.'.php';
    }
    if(file_exists('src/ConsultaRespuestaPedido/'.$className.'.php')){
        include_once 'src/ConsultaRespuestaPedido/'.$className.'.php';
    }
    if(file_exists('src/SolicitudPedido/'.$className.'.php')){
        include_once 'src/SolicitudPedido/'.$className.'.php';
    }
}