<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:25
 */

namespace App\SolicitudPedido;

use App\CustomSoap;

class SolicitudPedidoWS extends CustomSoap
{
    private $ws;

    private $wsdl = 'https://www.monroeamericana.com.ar/servicios/SolicitudPedido?WSDL';

    private $location = 'https://www.monroeamericana.com.ar/servicios/SolicitudPedido';

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

    public function SolicitudPedido($params){
        return $this->ws->SolicitudPedido($params);
    }
}