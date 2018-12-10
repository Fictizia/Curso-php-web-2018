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

    public function getByEmail($email)
    {
        //@DONE - crea este codigo
        $user = NULL;
        $sql = "SELECT * FROM users WHERE email = '{$email}'";
       
        $result = $this->dbConnection->query($sql);
        
        // var_dump($this->dbConnection->error);
        $row = $result->fetch_array();
        // var_dump($row);
        if ($row) {
            $user = self::createFromRow($row);
        }

        return $user; // devolvemos un usuario (no el email)
        // fin añadido
        //return null;      
    }

    public function delete($user)
    {
        $sql = "DELETE FROM users WHERE id = {$user->getId()}";
        $result = $this->dbConnection->query($sql);
        return $result;      
    }

    public function insert($user)
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