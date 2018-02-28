<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:30
 */

namespace App\ConsultaDisponibilidadProducto;


class DatosTransaccion
{
    /**
     * @var string $Deposito
     */
    private $Deposito;

    /**
     * @var Items[]
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
     * @return Items[]
     */
    public function getItems()
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