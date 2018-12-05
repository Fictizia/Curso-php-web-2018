<?php

Class UserRepository
{
    protected $dbConnection;

    public function __construct( $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public static function createFromRow($row) 
    {
        $newUser = new User();
        $newUser->setId($row['id']);
        $newUser->setName($row['name']);
        $newUser->setEmail($row['email']);
        $newUser->setSexo($row['sexo']);
        return $newUser;
    }
    
    public static function createFromVariables($id, $name, $email, $sexo) 
    {
        $newUser = new User();
        $newUser->setId($id);
        $newUser->setName($name);
        $newUser->setEmail($email);
        $newUser->setSexo($sexo);
        return $newUser;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $result = $this->dbConnection->query($sql);
        $userArray = [];
        foreach ($result as $row) {
            $userArray[] = self::createFromRow($row);
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
            $user = self::createFromRow($row);
        }

        return $user;      
    }

    public function getByEmail($id)
    {
        //@TODO - crea este codigo
        return null;      
    }

    public function delete($user)
    {
        $sql = "DELETE FROM users WHERE id = {$user->getId()}";
        $result = $this->dbConnection->query($sql);
        return $result;      
    }

    public function insert($user)
    {
        $sql = "INSERT INTO `clase8`.`users` 
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
        $sql = "UPDATE `clase8`.`users` 
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