<?php

Class Pet
{
    protected $id;
    protected $petRace;
    protected $petName;
    protected $petSex;
    protected $petAge;


    public function getPetId()
    {
        return $this->id;
    }

    public function setPetId($id)
    {
        $this->id = $id;
    }

    public function getPetRace()
    {
        return $this->petRace;
    }

    public function setPetRace($petRace)
    {
        $this->petRace = $petRace;
    }


    public function getPetName()
    {
        return $this->petName;
    }

    public function setPetName($petName)
    {
        $this->petName = $petName;
    }

    public function getPetSex()
    {
        return $this->petSex;
    }

    public function setPetSex($petSex)
    {
        $this->petSex = $petSex;
    }

    public function getPetAge()
    {
        return $this->petAge;
    }

    public function setPetAge($petAge)
    {
        $this->petAge = $petAge;
    }
}