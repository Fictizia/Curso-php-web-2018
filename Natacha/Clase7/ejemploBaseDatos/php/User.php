<?php

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
        /*if ($this->sexo == 'M'){
            return 'Masculino'; 
        } else {
            return 'Femenino';
        }*/
        switch ($this->sexo){
            case "M":
                return "Masculino"; 
                break;

            case "F":
                return "Femenino"; 
                break;
            case "N":
                return "No Binario";
                break;
        }
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

}