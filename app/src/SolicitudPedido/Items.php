<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:20
 */

namespace App\SolicitudPedido;


class Items
{
    /**
     * @var Item $Item
     */
    private $Item;

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->Item;
    }

    /**
     * @param Item $Item
     * @return Items
     */
    public function setItem(Item $Item): Items
    {
        $this->Item = $Item;
        return $this;
    }

}