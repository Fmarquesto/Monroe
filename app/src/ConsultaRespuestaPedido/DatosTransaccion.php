<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 12:48
 */

namespace App\ConsultaRespuestaPedido;


class DatosTransaccion
{
    /**
     * @var string $NroPedidoCliente
     */
    private $NroPedidoCliente;

    /**
     * @return string
     */
    public function getNroPedidoCliente(): string
    {
        return $this->NroPedidoCliente;
    }

    /**
     * @param string $NroPedidoCliente
     * @return DatosTransaccion
     */
    public function setNroPedidoCliente(string $NroPedidoCliente): DatosTransaccion
    {
        $this->NroPedidoCliente = $NroPedidoCliente;
        return $this;
    }


}