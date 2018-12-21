<?php
    require_once('autoload.php');

    global $conn;
    
    $petRepository = new PetRepository($conn);
    $userRepository = new UserRepository($conn);

    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $petName = $_POST['name'];
    $petRace = $_POST['race'];
    $petSex = $_POST['sex'];
    $petUserId = $_POST['pet_user'];

    $isAPost = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $isAPost = true;
    }
    ?>

<h1>Create Pet</h1>


    //esto es un controlador


<?php
    if ($isAPost) {
        try 
        {
            $petToCreate = PetNormalizer::createFromVariables(null, $petName, $petRace, $petSex, $petUserId);
            $createdPet = $petRepository->insert($petToCreate);
            $petRepository->getById($createdPet->getId());
            echo "<p>mascota creada con id {$pet->getId()} </p>";

        } catch (\Exception $e) {
            echo "<p>{$e->getMessage()}</p>";
        }
    }
?>



<form action="create-pet.php" method="post">
    <p>Pet name: <input type="text" name="name" /></p>
    <p>Pet race: <input type="text" name="race" /></p>
    <p>Pet sex (F/M/N): <input type="text" name="sex" /></p>
    <p>User's pet:
        <select name="pet_user">
            <option value="">'no user'</option>
            <?php
                $users = $userRepository->getAll(); 

                foreach($users as $user) {
                    echo '<option value="' . $user->getId() . '">' . $user->getName(). '</option>';
                }
            ?>
        </select>
    </p>
    <p><input type="submit" /></p>
</form>

<a href='./index.php'>back to main </a>

