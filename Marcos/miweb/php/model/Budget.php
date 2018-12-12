<?php

Class Budget
{
    protected $id;
    protected $servicio;
    protected $observaciones;
    protected $plazo;
    protected $presupuesto;
    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getServicio()
    {
        return $this->servicio;
    }

    public function setServicio($servicio)
    {
        $this->servicio = $servicio;
    }

    public function getObservaciones()
    {
        return $this->observaciones;
    }

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    public function getPlazo()
    {
        return $this->plazo;
    }

    public function setPlazo($plazo)
    {
        $this->plazo = $plazo;
    }
    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    public function setPresupuesto($presupuesto)
    {
        $this->presupuesto = $presupuesto;
    }

  
}