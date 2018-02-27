<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 14:31
 */

namespace App\ConsultaDisponibilidadProducto;


class Items
{
    /**
     * @var Items
     */
    private $Item;

    /**
     * @return Items
     */
    public function getItem(): Items
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