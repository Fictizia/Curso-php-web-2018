<?php
require_once ('autoload.php');
//require_once ('NormalizerInterface.php');

Class UserNormalizer implements NormalizerInterface
{
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
}
