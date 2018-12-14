<?php
    require_once('autoload.php');
    
    global $conn;
    
    $petRepository = new PetRepository($conn);
    
    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $petId = $_GET['pet'];
?>

<h1>pet To delete <?php echo $petId; ?></h1>
<?php

    $pet = $petRepository->getById($petId);
    $deleted = $petRepository->delete($pet);
    if ($deleted) {
        echo "<p> pet properly deleted </p>";
    } else {
        echo "<p> error: not deleted </p>";
        echo "<p> $conn->error</p>";
    }
?>
<a href='./index.php'>back to main </a>

