<?php
namespace App;


class Autorizacion
{
    /**
     * @var string $Usuario
     */
    private $Usuario;

    /**
     * @var string $Clave
     */
    private $Clave;

    /**
     * @var string $CodigoClienteDomicilio
     */
    private $CodigoClienteDomicilio;

    function __construct(){
        return $this;
    }

    /**
     * @return string
     */
    public function getUsuario(): string
    {
        return $this->Usuario;
    }

    /**
     * @param string $Usuario
     * @return Autorizacion
     */
    public function setUsuario(string $Usuario): Autorizacion
    {
        $this->Usuario = $Usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getClave(): string
    {
        return $this->Clave;
    }

    /**
     * @param string $Clave
     * @return Autorizacion
     */
    public function setClave(string $Clave): Autorizacion
    {
        $this->Clave = $Clave;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoClienteDomicilio(): string
    {
        return $this->CodigoClienteDomicilio;
    }

    /**
     * @param string $CodigoClienteDomicilio
     * @return Autorizacion
     */
    public function setCodigoClienteDomicilio(string $CodigoClienteDomicilio): Autorizacion
    {
        $this->CodigoClienteDomicilio = $CodigoClienteDomicilio;
        return $this;
    }



}