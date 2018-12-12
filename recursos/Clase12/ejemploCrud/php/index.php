<?php
    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');
    require_once('./config/dbConnection.php');
    
    global $conn;
    
    $userRepository = new UserRepository($conn);
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

    <h1>@TODO - añadir una lista de mascotas aqui debajo, con opciones CRUD, como usuarios</h1>
    </body>
</html>
