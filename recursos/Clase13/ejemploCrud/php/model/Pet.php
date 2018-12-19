<?php

require_once ('autoload.php');

Class Pet
{
    protected $id;
    protected $name;
    protected $race;
    protected $sexo;
    protected $user_id;
    protected $user;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        
    }

    public function getUser()
    {
        if (is_null($this->user)) {
            global $conn;
            if ($this->user_id) {
                $userRepository = new UserRepository($conn);
                $this->user = $userRepository->getById($this->user_id);
            }
        }

        return $this->user;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function setRace($race)
    {
        $this->race = $race;
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
        if ($this->name === '') {
            throw new \Exception ('Nombre vacio');
        }
        if ($this->name === '1') {
            throw new \Exception ('1 NO PUEDE TENER MASCOTA');
        }
        return true;
    }
}