<?php

Class PetRepository
{
    protected $dbConnection;

    public function __construct( $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    //@TODO MEDIUM Crear una clase para crear Usuarios desde variables o arrays
    public static function createFromRow($row) 
    {
        $newPet = new Pet();
        $newPet->setPetId($row['id']);
        $newPet->setPetName($row['name']);
        $newPet->setPetGenre($row['sexo']);
        return $newPet;
    }
    
    public static function createFromVariables($id, $petname, $genre) 
    {
        $newPet = new Pet();
        $newPet->setPetId($id);
        $newPet->setPetName($name);
        $newPet->setPetGenre($sexo);
        return $newPet;
    }
    //estos dos metodos de arriba pueden ir en una clase que pase de arrays o 
    //variables a objetos usuario 

    public function getAllPets()
    {
        $sql = "SELECT * FROM pets";
        $result = $this->dbConnection->query($sql);
        $petArray = [];
        foreach ($result as $row) {
            $petArray[] = self::createFromRow($row);
        }

        return $petArray;      
    }

    public function getPetById($id)
    {
        $pet = NULL;
        $sql = "SELECT * FROM pets WHERE id = {$id}";
        $result = $this->dbConnection->query($sql);

        $row = $result->fetch_array();
        if ($row) {
            $pet = self::createFromRow($row);
        }

        return $pet;      
    }

    public function delete($uspeter)
    {
        $sql = "DELETE FROM users WHERE id = {$pet->getPetId()}";
        $result = $this->dbConnection->query($sql);
        return $result;      
    }

    public function insert($pet)
    {
        $sql = "INSERT INTO `clase9`.`users` 
                    (`name`, `email`, `sexo`) 
                VALUES (
                     '{$user->getName()}',
                     '{$user->getEmail()}',
                     '{$user->getSexo()}'   
                )";
        $result = $this->dbConnection->query($sql);

        return $result;      
    }

    public function update($user)
    {
        $sql = "UPDATE `clase9`.`users` 
                SET 
                    name = '{$user->getName()}',
                    email = '{$user->getEmail()}',
                    sexo = '{$user->getSexo()}'   
                WHERE id = {$user->getId()}
                ";
        $result = $this->dbConnection->query($sql);

        return $result;      
    }

}