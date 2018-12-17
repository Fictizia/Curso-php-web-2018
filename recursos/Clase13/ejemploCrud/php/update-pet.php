<?php
    require_once('autoload.php');
    
    global $conn;
    
    $petRepository = new PetRepository($conn);
    $userRepository = new UserRepository($conn);

    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $petId = $_GET['pet'];
    $pet = $petRepository->getById($petId);
     
    $petName = $_POST['name'];
    $petRace = $_POST['race'];
    $petSex = $_POST['sex'];
    $petUserId = $_POST['pet_user'];
    $isAPost = false;
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $isAPost = true;
    }
    $users = $userRepository->getAll(); 
?>

<h1>UPDATE Pet con ID <?php echo $petId ?></h1>

<?php
    if ($pet) {
        if ($isAPost) {
            $petToUpdate = PetNormalizer::createFromVariables($petId, $petName, $petRace, $petSex, $petUserId);
            $updated = $petRepository->update($petToUpdate);
            if ($updated) {
                $pet = $petRepository->getById($petId);
                echo "<p>pet modicado: {$petId}}</p>";
            } else {
                echo "<p>pet no pudo ser modificado</p>";
                echo "<p>{$conn->err}</p>";
            }
        }

        echo '
            <form action="update-pet.php?pet=' . $pet->getId() .'" method="post">
                <p>Pet Id: <input type="text" name="name" value="' . $pet->getId() . '"/></p>
                <p>Pet name: <input type="text" name="name" value="' . $pet->getName() . '" /></p>
                <p>Pet race: <input type="text" name="race" value="' . $pet->getRace() . '"/></p>
                <p>Pet sex (F/M/N): <input type="text" name="sex" value="' . $pet->getSexo() . '"/></p>
                <p>User\'s pet:
                <select name="pet_user">
                    <option value="">no user</option>
            ';
                    foreach($users as $user) {
                        $selectString = '';
                        if ($pet->getUser() && $pet->getUser()->getId() == $user->getid()) {

                            $selectString = ' selected="selected" ';
                        }
                        echo '<option value="' . $user->getId() . '"'.
                            $selectString . 
                            '>' . $user->getName(). '</option>';
                    }
        echo '    </select>
            </p>
        
                <p><input type="submit" /></p>
            </form>
        ';
    } else {
        echo "pet not found with id: {$petId}</p>";
    }
?>
<a href='./index.php'>back to main </a>

