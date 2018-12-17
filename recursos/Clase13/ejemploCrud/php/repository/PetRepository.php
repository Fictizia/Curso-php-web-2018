<?php

require_once ('autoload.php');

Class PetRepository
{
    protected $dbConnection;

    public function __construct( $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

  
    public function getAll()
    {
        $sql = "SELECT * FROM pets";
        $result = $this->dbConnection->query($sql);
        $petArray = [];
        foreach ($result as $row) {
            $petArray[] = PetNormalizer::createFromRow($row);
        }

        return $petArray;      
    }

    public function getById($id)
    {
        $pet = NULL;
        $sql = "SELECT * FROM pets WHERE id = {$id}";
        $result = $this->dbConnection->query($sql);

        $row = $result->fetch_array();
        if ($row) {
            $pet = PetNormalizer::createFromRow($row);
        }

        return $pet;      
    }
 
    public function delete($pet)
    {
        $sql = "DELETE FROM pets WHERE id = {$pet->getId()}";
        $result = $this->dbConnection->query($sql);
        return $result;      
    }

    public function insert($pet)
    {
        $sql = "INSERT INTO  `pets` 
                    (`name`, `race`, `sexo`, `user_id`) 
                VALUES (
                     '{$pet->getName()}',
                     '{$pet->getRace()}',
                     '{$pet->getSexo()}',   
                     '{$pet->getUserId()}'   
                )";
        $result = $this->dbConnection->query($sql);

        return $result;      
    }

    public function update($pet)
    {
        $sql = "UPDATE `pets` 
                SET 
                    name = '{$pet->getName()}',
                    race = '{$pet->getRace()}',
                    sexo = '{$pet->getSexo()}',
                    user_id = '{$pet->getUserId()}'   
                WHERE id = {$pet->getId()}
                ";
        $result = $this->dbConnection->query($sql);

        return $result;      
    }
}