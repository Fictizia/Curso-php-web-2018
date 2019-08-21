<?php
    require_once('./autoload.php');

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

