<?php

Class User
{
    private $name;
    private $email;
    private $sex;

    public static function createFromRow($row) {
        $newUser = new Usuario();
        $newUser->setName($row['name']);
        $newUser->setName($row['email']);
        $newUser->setName($row['sex']);

        return $newUser;
    }

    public function getName()
    {
        return $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSex()
    {
        return $sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }
}