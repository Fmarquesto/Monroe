<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:39
 */

namespace App\ConsultaDisponibilidadProducto;

use App\CustomSoap;

class ConsultaDisponibilidadProductoWS extends CustomSoap
{
    private $ws;

    private $wsdl = 'https://www.monroeamericana.com.ar/servicios/ConsultaDisponibilidadProducto?WSDL';

    private $location = 'https://www.monroeamericana.com.ar/servicios/ConsultaDisponibilidadProducto';

    function __construct(){
        $opciones = array('trace' => 1,
            'exceptions' => TRUE,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'location' => $this->location);

        try{
            $this->ws = new CustomSoap($this->wsdl,$opciones);
        }catch (\Exception $e){
            var_dump($e);
        }
    }

    public function ConsultaDisponibilidadProducto($params){
        return $this->ws->ConsultaDisponibilidadProducto($params);
    }
}