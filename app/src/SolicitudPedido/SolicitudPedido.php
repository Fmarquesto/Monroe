<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 13:01
 */

namespace App\SolicitudPedido;

use App\Autorizacion;

class SolicitudPedido
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
     * @return SolicitudPedido
     */
    public function setAutorizacion(Autorizacion $Autorizacion): SolicitudPedido
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
     * @return SolicitudPedido
     */
    public function setDatosTransaccion(DatosTransaccion $DatosTransaccion): SolicitudPedido
    {
        $this->DatosTransaccion = $DatosTransaccion;
        return $this;
    }

}