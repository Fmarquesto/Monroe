<?php
/**
 * Created by PhpStorm.
 * User: fmarquesto
 * Date: 27/02/18
 * Time: 15:19
 */

namespace App;


class Producto
{
    /**
     * @var int $ItemIdDrogueria
     */
    private $ItemIdDrogueria;

    /**
     * @var string $CodigoBarras
     */
    private $CodigoBarras;

    /**
     * @var string $Nombre
     */
    private $Nombre;

    /**
     * @var string $TroquelPami
     */
    private $TroquelPami;

    /**
     * @var string $CodigoInternoManualFarmaceutico
     */
    private $CodigoInternoManualFarmaceutico;

    /**
     * @return int
     */
    public function getItemIdDrogueria(): int
    {
        return $this->ItemIdDrogueria;
    }

    /**
     * @param int $ItemIdDrogueria
     * @return Producto
     */
    public function setItemIdDrogueria(int $ItemIdDrogueria): Producto
    {
        $this->ItemIdDrogueria = $ItemIdDrogueria;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoBarras(): string
    {
        return $this->CodigoBarras;
    }

    /**
     * @param string $CodigoBarras
     * @return Producto
     */
    public function setCodigoBarras(string $CodigoBarras): Producto
    {
        $this->CodigoBarras = $CodigoBarras;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->Nombre;
    }

    /**
     * @param string $Nombre
     * @return Producto
     */
    public function setNombre(string $Nombre): Producto
    {
        $this->Nombre = $Nombre;
        return $this;
    }
    /**
     * @return string
     */
    public function getTroquelPami(): string
    {
        return $this->TroquelPami;
    }

    /**
     * @param string $TroquelPami
     * @return Producto
     */
    public function setTroquelPami(string $TroquelPami): Producto
    {
        $this->TroquelPami = $TroquelPami;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoInternoManualFarmaceutico(): string
    {
        return $this->CodigoInternoManualFarmaceutico;
    }

    /**
     * @param string $CodigoInternoManualFarmaceutico
     * @return Producto
     */
    public function setCodigoInternoManualFarmaceutico(string $CodigoInternoManualFarmaceutico): Producto
    {
        $this->CodigoInternoManualFarmaceutico = $CodigoInternoManualFarmaceutico;
        return $this;
    }


    public function clean(){
        $vars = get_object_vars($this);

        foreach ($vars as $k => $var){
            if(is_null($var))
                unset($this->{$k});
        }
        return $this;
    }
}