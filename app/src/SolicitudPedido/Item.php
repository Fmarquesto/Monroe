<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:20
 */

namespace App\SolicitudPedido;


use App\Producto;

class Item
{
    /**
     * @var Producto $Producto
     */
    private $Producto;

    /**
     * @var int $CantidadRequerida
     */
    private $CantidadRequerida;

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
    public function getCantidadRequerida(): int
    {
        return $this->CantidadRequerida;
    }

    /**
     * @param int $CantidadRequerida
     * @return Item
     */
    public function setCantidadRequerida(int $CantidadRequerida): Item
    {
        $this->CantidadRequerida = $CantidadRequerida;
        return $this;
    }

}