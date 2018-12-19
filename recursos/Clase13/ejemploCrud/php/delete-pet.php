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

    try {
        $pet = $petRepository->getById($petId);
        $deleted = $petRepository->delete($pet);
        echo "<p> pet properly deleted </p>";
    } catch (\Exception $e) {
        echo "<p>{$e->getMessage()}</p>";
    }
?>
<a href='./index.php'>back to main </a>

