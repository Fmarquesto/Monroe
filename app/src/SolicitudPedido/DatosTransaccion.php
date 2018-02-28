<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:18
 */

namespace App\SolicitudPedido;


class DatosTransaccion
{
    /**
     * @var string $Deposito
     */
    private $Deposito;

    /**
     * @var string $RetiraEnDrogueria
     */
    private $RetiraEnDrogueria;

    /**
     * @var string $NroPedidoCliente
     */
    private $NroPedidoCliente;

    /**
     * @var Items[] $Items
     */
    private $Items;

    /**
     * @return string
     */
    public function getDeposito(): string
    {
        return $this->Deposito;
    }

    /**
     * @param string $Deposito
     * @return DatosTransaccion
     */
    public function setDeposito(string $Deposito): DatosTransaccion
    {
        $this->Deposito = $Deposito;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetiraEnDrogueria(): string
    {
        return $this->RetiraEnDrogueria;
    }

    /**
     * @param string $RetiraEnDrogueria
     * @return DatosTransaccion
     */
    public function setRetiraEnDrogueria(string $RetiraEnDrogueria): DatosTransaccion
    {
        $this->RetiraEnDrogueria = $RetiraEnDrogueria;
        return $this;
    }

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

    /**
     * @return Items[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * @param Items $Items
     * @return DatosTransaccion
     */
    public function setItems(Items $Items): DatosTransaccion
    {
        $this->Items[] = $Items;
        return $this;
    }

}