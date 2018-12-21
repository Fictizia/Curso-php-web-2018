<?php
    require_once('autoload.php');
    
    global $conn;
    
    $userRepository = new UserRepository($conn);    
    $petRepository  = new PetRepository($conn);
?>
<html>
    <head>
    </head>
    <body>
        <h1>Panel de usuarios</h1>
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


        <h1>Panel de mascotas</h1>
        <table class="table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Race</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Owner</th>

            <th>OPS</th>
            </tr>
        </thead>
        <tbody>
          
        <?php
            $pets = $petRepository->getAll();

            foreach ($pets as $pet) {
                $userName = '';
                if ($pet->getUser()) {
                    $userName = $pet->getUser()->getName();
                }
                echo "<tr>";
                    echo "<td>{$pet->getId()}</td>";
                    echo "<td>{$pet->getRace()}</td>";
                    echo "<td>{$pet->getName()}</td>";
                    echo "<td>{$pet->getSexo()}</td>";
                    echo "<td>{$userName}</td>";

                    echo "<td>
                        <a href='update-pet.php?pet={$pet->getId()}'>Update</a>
                        <a href='delete-pet.php?pet={$pet->getId()}'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
        <a href='create-pet.php'>create pet</a>


    </body>
</html>
