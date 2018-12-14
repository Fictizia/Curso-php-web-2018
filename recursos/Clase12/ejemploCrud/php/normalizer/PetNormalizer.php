<?php
require_once ('autoload.php');

Class PetNormalizer implements NormalizerInterface
{
   public static function createFromRow($row) 
  {
      $newPet = new Pet();
      $newPet->setId($row['id']);
      $newPet->setName($row['name']);
      $newPet->setRace($row['race']);
      $newPet->setSexo($row['sexo']);
      return $newPet;
  }
  
  public static function createFromVariables($id, $name, $race, $sexo) 
  {
      $newPet = new Pet();
      $newPet->setId($id);
      $newPet->setName($name);
      $newPet->setRace($race);
      $newPet->setSexo($sexo);
      return $newPet;
  }
 }
