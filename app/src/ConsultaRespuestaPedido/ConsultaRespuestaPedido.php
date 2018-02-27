<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 12:46
 */

namespace App\ConsultaRespuestaPedido;

use App\Autorizacion;

class ConsultaRespuestaPedido
{
    /**
     * @var Autorizacion
     */
    private $Autorizacion;

    /**
     * @var DatosTransaccion
     */
    private $DatosTransaccion;

    /**
     * @return Autorizacion
     */
    public function getAutorizacion(): Autorizacion
    {
        return $this->Autorizacion;
    }

    /**
     * @param Autorizacion $Autorizacion
     * @return ConsultaRespuestaPedido
     */
    public function setAutorizacion(Autorizacion $Autorizacion): ConsultaRespuestaPedido
    {
        $this->Autorizacion = $Autorizacion;
        return $this;
    }

    /**
     * @return DatosTransaccion
     */
    public function getDatosTransaccion(): DatosTransaccion
    {
        return $this->DatosTransaccion;
    }

    /**
     * @param DatosTransaccion $DatosTransaccion
     * @return ConsultaRespuestaPedido
     */
    public function setDatosTransaccion(DatosTransaccion $DatosTransaccion): ConsultaRespuestaPedido
    {
        $this->DatosTransaccion = $DatosTransaccion;
        return $this;
    }

}