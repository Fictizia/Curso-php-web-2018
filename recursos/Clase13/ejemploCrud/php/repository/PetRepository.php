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
        if (!$result) {
            throw new  DatabaseError($this->dbConnection->error);
        }
        $row = $result->fetch_array();
        if ($row) {
            $pet = PetNormalizer::createFromRow($row);
        }

        return $pet;      
    }
 
    public function delete($pet)
    {
        $petNotFound = ( 
            $pet === null || 
            $this->getById($pet->getId()) === null 
        );
        if ($petNotFound) {
            throw new  PetNotFoundException('pet no encontrado');
        }

        $sql = "DELETE FROM pets WHERE id = ? ";
        $sqlStatement = $this->dbConnection->prepare($sql);
        $sqlStatement->bind_param("i", $pet->getId());
        $result = $sqlStatement->execute();
        if (!$result) {
            throw new  DatabaseError($this->dbConnection->error);
        }

        return $pet;      
    }

    public function insert($pet)
    {
        $userId =$pet->getUserId()??null;
        $sql = "INSERT INTO  `pets` 
                    (`name`, `race`, `sexo`) 
                VALUES (?, ?, ?)";
        $sqlStatement = $this->dbConnection->prepare($sql);
        $sqlStatement->bind_param("sssi",
            $pet->getName(),
            $pet->getRace(),
            $pet->getSexo()
        );
        $ok = $sqlStatement->execute();
        if (!$ok) {
            throw new DatabaseError($this->dbConnection->error); 
        }
        return $pet;      
    }

    public function update($pet)
    {
        $sql = "UPDATE `pets` 
                SET 
                    name = ?,
                    race = ?,
                    sexo = ?,
                    user_id = ?    
                WHERE id = ?
                ";
        $sqlStatement = $this->dbConneection->prepare($sql);
        $sqlStatement->bind_param("sssii",
            $pet->getName(),
            $pet->getRace(),
            $pet->getSexo(),
            $pet->getUserId(),
            $pet->getId()
        );
        $ok = $sqlStatement->execute();
        if (!$ok) {
            throw new DatabaseError($this->dbConnection->error); 
        }
        $pet->setId($sqlStatement->affected_rows);
        return $pet;      
    }
}