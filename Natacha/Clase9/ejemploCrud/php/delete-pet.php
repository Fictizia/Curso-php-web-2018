<?php
    require_once('./bbdd-conn.php');
    require_once('./model/Pet.php');    
    require_once('./repository/PetRepository.php');
    require_once('./utils.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    $petRepository = new PetRepository($conn);
    
    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $petId = $_GET['pet'];
?>

<h1>User To delete <?php echo $petId; ?></h1>
<?php

    $pet = $petRepository->getPetById($petId);
    $deleted = $petRepository->delete($pet);
    if ($deleted) {
        echo "<p> pet properly deleted </p>";
    } else {
        echo "<p> error: not deleted </p>";
        echo "<p> $conn->error() </p>";
    }
?>
<a href='./index.php'>back to main </a>

