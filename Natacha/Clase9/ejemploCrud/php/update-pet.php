<?php

    require_once('./model/Pet.php');    
    require_once('./repository/PetRepository.php');
    require_once('./bbdd-conn.php');
    require_once('./utils.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    $petRepository = new PetRepository($conn);

    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar

    $petId = $_GET['pet'];
    $pet = $petRepository->getPetById($petId);
     
    $petName = $_POST['petname'];
    $petRace = $_POST['raza'];
    $petAge = $_POST['edad'];
    $petSex = $_POST['sexo'];
?>

<?php
    //@DONE: aqui los datos no se refrescan bien cuando se cambian... puedes arreglarlo?
    if ($pet) {
        echo '
            <h1>ID ' . $pet->getPetId() .'</h1>
            <form action="update-pet.php?pet=' . $pet->getPetId() .'" method="post">
                <p>pet Id: <input type="text" name="id" value="' . $pet->getPetId() . '"/></p>
                <p>pet name: <input type="text" name="petname" value="' . $pet->getPetName() . '" /></p>
                <p>pet raza: <input type="text" name="raza" value="' . $pet->getPetRace() . '"/></p>
                <p>pet sex (F/M): <input type="text" name="sexo" value="' . $pet->getPetSex() . '"/></p>
                <p>pet age: <input type="text" name="edad" value="' . $pet->getPetAge() . '"/></p>
                <p><input type="submit" /></p>
            </form>
        ';
    } else {
        echo "pet not found with id: {$petId}</p>";
    }

    if ($pet && isAPost()) {
        $petToUpdate = $petRepository::createPetFromVariables($petId, $petName, $petRace, $petAge, $petSex);
        $updated = $petRepository->update($petToUpdate);
        if ($updated) {
            $pet = $petRepository->getPetById($petId);
            echo "<p>usuario modicado: </p><ul>";
            echo "<li>ID: {$pet->getPetId()}</li>";
            echo "<li>Nombre: {$pet->getPetName()}</li>";
            echo "<li>Raza: {$pet->getPetRace()}</li>";
            echo "<li>Sexo: {$pet->getPetSex()}</li></ul>";
            echo "<li>Edad: {$pet->getPetAge()}</li></ul>";
        } else {
            echo "<p>usuario no pudo ser modificado</p>";
            echo "<p>{$conn->error}</p>";
            var_dump($pet);
        }
    }

?>
<a href='./index.php'>back to main </a>

