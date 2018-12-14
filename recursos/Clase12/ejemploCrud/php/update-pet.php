<?php
    require_once('autoload.php');
    
    global $conn;
    
    $petRepository = new PetRepository($conn);

    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $petId = $_GET['pet'];
    $pet = $petRepository->getById($petId);
     
    $petName = $_POST['name'];
    $petRace = $_POST['race'];
    $petSex = $_POST['sex'];

    $isAPost = false;
    if ($SERVER['REQUEST_METHOD']=='POST') {
        $isAPost = true;
    }
?>

<h1>@TODO UPDATE Pet con ID PON AQUI LA ID</h1>

<?php
    //@TODO: aqui los datos no se refrescan bien cuando se cambian... puedes arreglarlo?
    if ($pet) {
        echo '
            <form action="update-pet.php?pet=' . $pet->getId() .'" method="post">
                <p>Pet Id: <input type="text" name="name" value="' . $pet->getId() . '"/></p>
                <p>Pet name: <input type="text" name="name" value="' . $pet->getName() . '" /></p>
                <p>Pet race: <input type="text" name="race" value="' . $pet->getRace() . '"/></p>
                <p>Pet sex (F/M/N): <input type="text" name="sex" value="' . $pet->getSexo() . '"/></p>
                <p><input type="submit" /></p>
            </form>
        ';
    } else {
        echo "pet not found with id: {$petId}</p>";
    }

    if ($pet && $isAPost) {
        $petToUpdate = PetNormalizer::createFromVariables($petId, $petName, $petRace, $petSex);
        $updated = $petRepository->update($petToUpdate);
        if ($updated) {
            $pet = $petRepository->getById($petId);
            echo "<p>usuario modicado: @TODO PINTA AQUI LOS DATOS</p>";
        } else {
            echo "<p>usuario no pudo ser modificado</p>";
            echo "<p>{$conn->err}</p>";
        }
    }

?>
<a href='./index.php'>back to main </a>

