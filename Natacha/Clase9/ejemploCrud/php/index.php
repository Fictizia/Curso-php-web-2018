<?php
    require_once('./autoload.php');

    $userRepository = new UserRepository($conn);
    $petRepository = new PetRepository($conn);
?>
<html>
    <head>
    </head>
    <body>
        <h1>Panel de usuarios</h1>
        <h2>Usuarios</h2>
        <table class="table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Sex</th>
            <th>OPS</th>
            </tr>
        </thead>
        <tbody>
          
        <?php
            $users = $userRepository->getAll();

            foreach ($users as $user) {
                echo "<tr>";
                    echo "<td>{$user->getId()}</td>";
                    echo "<td>{$user->getName()}</td>";
                    echo "<td>{$user->getEmail()}</td>";
                    echo "<td>{$user->getSexo()}</td>";
                    echo "<td>
                        <a href='update-user.php?user={$user->getId()}'>Update</a>
                        <a href='delete-user.php?user={$user->getId()}'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
        <a href='create-user.php'>create user</a>
<!-- mascotas -->
       <h2>Usuarios</h2>
        <table class="table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Raza</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>OPS</th>
            </tr>
        </thead>
        <tbody>
          
        <?php
            $pets = $petRepository->getAllPets();

            foreach ($pets as $pet) {
                echo "<tr>";
                    echo "<td>{$pet->getPetId()}</td>";
                    echo "<td>{$pet->getPetRace()}</td>";
                    echo "<td>{$pet->getPetName()}</td>";
                    echo "<td>{$pet->getPetAge()}</td>";
                    echo "<td>{$pet->getPetSex()}</td>";
                    echo "<td>
                        <a href='update-pet.php?pet={$pet->getPetId()}'>Update</a>
                        <a href='delete-pet.php?pet={$pet->getPetId()}'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
        <a href='create-pet.php'>create pet</a>


    </body>
</html>
