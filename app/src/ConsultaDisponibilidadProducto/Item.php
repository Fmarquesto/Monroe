<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:32
 */

namespace App\ConsultaDisponibilidadProducto;


use App\Producto;

class Item
{
    /**
     * @var Producto
     */
    private $Producto;

    /**
     * @var int $Cantidad
     */
    private $Cantidad;

    /**
     * @return Producto
     */
    public function getProducto(): Producto
    {
        return $this->Producto;
    }

    /**
     * @param Producto $Producto
     * @return Item
     */
    public function setProducto(Producto $Producto): Item
    {
        $this->Producto = $Producto;
        return $this;
    }

    /**
     * @return int
     */
    public function getCantidad(): int
    {
        return $this->Cantidad;
    }

    /**
     * @param int $Cantidad
     * @return Item
     */
    public function setCantidad(int $Cantidad): Item
    {
        $this->Cantidad = $Cantidad;
        return $this;
    }

}