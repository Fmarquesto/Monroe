<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 12:55
 */

namespace App\ConsultaRespuestaPedido;

use App\CustomSoap;

class ConsultaRespuestaPedidoWS extends CustomSoap
{
    private $ws;

    private $wsdl = 'https://www.monroeamericana.com.ar/servicios/ConsultaRespuestaPedido?WSDL';

    private $location = 'https://www.monroeamericana.com.ar/servicios/ConsultaRespuestaPedido';

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

    public function ConsultaRespuestaPedido($params){
        return $this->ws->ConsultaRespuestaPedido($params);
    }
}