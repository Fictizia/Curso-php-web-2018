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
    $petUserId = $_POST['user_id'];

    $isAPost = false;
    if ($petName && $petRace && $petSex) {
        $isAPost = true;
    }
    ?>

<h1>Create Pet</h1>

<form action="create-pet.php" method="post">
    <p>Pet name: <input type="text" name="name" /></p>
    <p>Pet race: <input type="text" name="race" /></p>
    <p>Pet sex (F/M/N): <input type="text" name="sex" /></p>
    <p>User's pet:
        <select name="pets">
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

<?php

    if ($isAPost) {
        if (!$pet) {
            $newPet = PetNormalizer::createFromVariables(null, $petName, $petRace, $petSex, $petUserId);
            $created = $petRepository->insert($newPet);
            if ($created) {
                $pet = $petRepository->getById($conn->insert_id);
                echo "<p>mascota creada con id @TODO PON AQUI EL ID DEL USUARIO </p>";
            } else {
                echo "<p>mascota no pudo ser creada</p>";
                echo "<p>{$conn->err}</p>";
            }
        } else {
            echo "<p>pet with racee: {$petRace} already exists</p>";
        }
    }
?>
<a href='./index.php'>back to main </a>

