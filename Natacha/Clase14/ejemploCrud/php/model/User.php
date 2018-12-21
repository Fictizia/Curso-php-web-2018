<?php

require_once ('autoload.php');

Class User
{
    protected $id;
    protected $name;
    protected $email;
    protected $sexo;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function validate() 
    {
        if ($this->sexo !== 'F' && $this->sexo !== 'M' && $this->sexo !== 'N') {
            throw new \Exception ('Sexo tiene que valer F M o N');
        }   
        if ($this->email === '') {
            throw new \Exception ('El email es obligatorio');
        }
        if ($this->name === '') {
            throw new \Exception ('Nombre vacio');
        }
        return true;
    }
}