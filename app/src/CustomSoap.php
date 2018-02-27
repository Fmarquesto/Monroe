<?php
namespace App;

class CustomSoap extends \SoapClient
{
    private $arraySearch = array(
        '<ns1:ConsultaRespuestaPedido>',
        '<ns1:SolicitudPedido>',
        '<ns1:ConsultaDisponibilidadProducto>'
    );

    private $arrayReplace = array(
        '<ns1:ConsultaRespuestaPedido xmlns="wsmasa">',
        '<ns1:SolicitudPedido xmlns="wsmasa">',
        '<ns1:ConsultaDisponibilidadProducto xmlns="wsmasa">'
    );

    public function __doRequest($request, $location, $action, $version, $one_way = null)
    {
        $request = str_replace($this->arraySearch, $this->arrayReplace, $request);
        //var_dump($request);die;
        return parent::__doRequest($request, $location, $action, $version);
    }
}