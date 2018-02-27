<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:30
 */

namespace App\ConsultaDisponibilidadProducto;


use App\Autorizacion;

class ConsultaDisponibilidadProducto
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
     * @return ConsultaDisponibilidadProducto
     */
    public function setAutorizacion(Autorizacion $Autorizacion): ConsultaDisponibilidadProducto
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
     * @return ConsultaDisponibilidadProducto
     */
    public function setDatosTransaccion(DatosTransaccion $DatosTransaccion): ConsultaDisponibilidadProducto
    {
        $this->DatosTransaccion = $DatosTransaccion;
        return $this;
    }

}