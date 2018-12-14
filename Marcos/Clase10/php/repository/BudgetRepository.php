<?php

Class BudgetRepository
{
    protected $dbConnection;

    public function __construct( $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    //@TODO MEDIUM Crear una clase para crear Usuarios desde variables o arrays
    public static function createFromRow($row) 
    {
        $newBudget = new User();
        $newBudget->setId($row['id']);
        $newBudget->setServicio($row['servicio']);
        $newBudget->setObservaciones($row['observaciones']);
        $newBudget->setPlazo($row['plazo']);
        $newBudget->setPresupuesto($row['presupuesto']);
        
        return $newBudget;
    }
    
    public static function createFromVariables($id, $servicio, $observaciones, $plazo, $presupuesto) 
    {
        $newBudget = new Budget();
        $newBudget->setId($id);
        $newBudget->setServicio($servicio);
        $newBudget->setObservaciones($observaciones);
        $newBudget->setPlazo($plazo);
        $newBudget->setPresupuesto($presupuesto);
        return $newBudget;
    }
    //estos dos metodos de arriba pueden ir en una clase que pase de arrays o 
    //variables a objetos usuario 

    public function getAll()
    {
        $sql = "SELECT * FROM budget";
        $result = $this->dbConnection->query($sql);
        $userArray = [];
        foreach ($result as $row) {
            $userArray[] = self::createFromRow($row);
        }

        return $userArray;      
    }

    public function getById($id)
    {
        $budget = NULL;
        $sql = "SELECT * FROM budget WHERE id = {$id}";
        $result = $this->dbConnection->query($sql);

        $row = $result->fetch_array();
        if ($row) {
            $budget = self::createFromRow($row);
        }

        return $budget;      
    }

    
    public function delete($budget)
    {
        $sql = "DELETE FROM budget WHERE id = {$budget->getId()}";
        $result = $this->dbConnection->query($sql);
        return $result;      
    }

    public function insert($budget)
    {
        $sql = "INSERT INTO `clase10`.`budget` 
                    (`servicio`, `observaciones`, `plazo`, `presupuesto`) 
                VALUES (
                     '{$budget->getServicio()}',
                     '{$budget->getObservaciones()}',
                     '{$budget->getPlazo()}',
                     '{$budget->getPresupuesto()}'
                         
                )";
                

        $result = $this->dbConnection->query($sql);

        return $result;      
    }

    public function update($budget)
    {
        $sql = "UPDATE `clase10`.`budget` 
                SET 
                    servicio = '{$budget->getServicio()}',
                    observaciones = '{$budget->getObservaciones()}',
                    plazo = '{$budget->getPlazo()}',
                    presupuesto = '{$budget->getPresupuesto()}'
                      
                WHERE id = {$budget->getId()}
                ";
        $result = $this->dbConnection->query($sql);

        return $result;      
    }

}