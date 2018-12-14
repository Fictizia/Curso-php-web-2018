<?php
require_once ('autoload.php');

Class UserRepository
{
    protected $dbConnection;

    public function __construct( $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }


    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $result = $this->dbConnection->query($sql);
        $userArray = [];
        foreach ($result as $row) {
            $userArray[] = UserNormalizer::createFromRow($row);
        }

        return $userArray;      
    }

    public function getById($id)
    {
        $user = NULL;
        $sql = "SELECT * FROM users WHERE id = {$id}";
        $result = $this->dbConnection->query($sql);

        $row = $result->fetch_array();
        if ($row) {
            $user = UserNormalizer::createFromRow($row);
        }

        return $user;      
    }

    public function getByEmail($email)
    {
        $user = NULL;
        $sql = "SELECT * FROM users WHERE email = '{$email}'";
        $result = $this->dbConnection->query($sql);

        $row = $result->fetch_array();
        if ($row) {
            $user = UserNormalizer::createFromRow($row);
        }

        return $user;      
    }

    public function delete($user)
    {
        $sql = "DELETE FROM users WHERE id = {$user->getId()}";
        $result = $this->dbConnection->query($sql);
        return $result;      
    }

    public function insert($user)
    {
        $sql = "INSERT INTO  `users` 
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
        $sql = "UPDATE `users` 
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