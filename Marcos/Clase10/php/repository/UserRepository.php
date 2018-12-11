<?php

Class UserRepository
{
    protected $dbConnection;

    public function __construct( $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    //@TODO MEDIUM Crear una clase para crear Usuarios desde variables o arrays
    public static function createFromRow($row) 
    {
        $newUser = new User();
        $newUser->setId($row['id']);
        $newUser->setName($row['name']);
        $newUser->setEmail($row['email']);
        $newUser->setTelephone($row['telephone']);
        $newUser->setMessage($row['message']);
        $newUser->setAccepted($row['accepted']);
        return $newUser;
    }
    
    public static function createFromVariables($id, $name, $email, $telephone, $message, $accepted) 
    {
        $newUser = new User();
        $newUser->setId($id);
        $newUser->setName($name);
        $newUser->setEmail($email);
        $newUser->setTelephone($telephone);
        $newUser->setMessage($message);
        $newUser->setAccepted($accepted);
        return $newUser;
    }
    //estos dos metodos de arriba pueden ir en una clase que pase de arrays o 
    //variables a objetos usuario 

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
        $sql = "INSERT INTO `clase10`.`users` 
                    (`name`, `email`, `telephone`, `message` , `accepted`) 
                VALUES (
                     '{$user->getName()}',
                     '{$user->getEmail()}',
                     '{$user->getTelephone()}',
                     '{$user->getMessage()}',
                     '{$user->getAccepted()}'    
                )";
                

        $result = $this->dbConnection->query($sql);

        return $result;      
    }

    public function update($user)
    {
        $sql = "UPDATE `clase10`.`users` 
                SET 
                    name = '{$user->getName()}',
                    email = '{$user->getEmail()}',
                    telephone = '{$user->getTelephone()}',
                    message = '{$user->getMessage()}',
                    accepted = '{$user->getAccepted()}'     
                WHERE id = {$user->getId()}
                ";
        $result = $this->dbConnection->query($sql);

        return $result;      
    }

}