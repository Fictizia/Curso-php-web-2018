<?php

Class Pet
{
    protected $id;
    protected $petname;
    protected $petgenre;

    public function getPetId()
    {
        return $this->id;
    }

    public function setPetId($id)
    {
        $this->id = $id;
    }

    public function getPetName()
    {
        return $this->petname;
    }

    public function setPetName($petname)
    {
        $this->petname = $petname;
    }

    public function getPetGenre()
    {
        return $this->petgenre;
    }

    public function setPetGenre($petgenre)
    {
        $this->petgenre = $petgenre;
    }
}