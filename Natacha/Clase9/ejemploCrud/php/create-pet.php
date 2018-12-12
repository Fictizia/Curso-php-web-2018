<?php
    require_once('./model/Pet.php');    
    require_once('./repository/PetRepository.php');
    require_once('./bbdd-conn.php');
    require_once('./utils.php');

    //@DONE este codigo que se repite, se puede poner en un fichero aparte
    //@TODO MEDIUM con estos datos, se puede crear una clase de base de datos
    //@TODO MEGATODO: Busca una base de datos Singleton y trata de que funcione en 
    //este codigo


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    $petRepository = new PetRepository($conn);

    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $petName = $_POST['petname'];
    $petRace = $_POST['raza'];
    $petAge = $_POST['edad'];
    $petSex = $_POST['sexo'];
    ?>

<h1>Create Pet</h1>

<form action="create-pet.php" method="post">
    <p>Pet name: <input type="text" name="petname" /></p>
    <p>Pet Race: <input type="text" name="raza" /></p>
    <p>Pet sex (M/H): <input type="text" name="sexo" /></p>
    <p>Pet Age: <input type="text" name="edad" /></p>
    <p><input type="submit" /></p>
</form>

<?php

    if (isAPost()) {

            $newPet = $petRepository::createPetFromVariables(null, $petName, $petRace, $petAge, $petSex);
            $created = $petRepository->insert($newPet);
            if ($created) {
                    $pet = $petRepository->getPetById($conn->insert_id);
                    echo "<p>mascota creado con id {$pet->getPetId()} con nombre {$pet->getPetName()}</p>";
            } else {
                    echo "<p>mascota no pudo ser creado</p>";
                    echo "<p>{$conn->error}</p>";
            }

    }
?>
<a href='./index.php'>back to main </a>

