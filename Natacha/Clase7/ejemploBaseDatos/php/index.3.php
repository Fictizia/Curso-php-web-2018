<?php
    require_once('./User.php');

    $servername = "mysql_db";
    $serverport = "3306";
    $dbname = "clase7";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    function createUserFromRow($row) {
        $newUser = new User();

        $newUser->setName($row['name']);
        $newUser->setEmail($row['email']);
        $newUser->setId($row['id']);
        $newUser->setSexo($row['sexo']);
        
        return $newUser;
    }
?>
<html>
    <head>
    </head>
    <body>
        <h1>Listar todos los usuarios</h1>
        <?php
            // filtrar por sexo y por nombre
            //$sql = "SELECT * FROM users WHERE sexo = 'M' AND email like '%fakemail%'";
            $sql = "SELECT * FROM users WHERE sexo = 'M'";
            $result = $conn->query($sql);

            echo '<h2>Hombres</h2>';
            foreach ($result as $k => $row) 
            {
                $user = createUserFromRow($row);
                echo '<ul>';
                echo "<li>Nombre: {$user->getName()}</li>";
                echo "<li>email: {$user->getEmail()}</li>";
                echo "<li>id: {$user->getid()}</li>";
                echo "<li>sexo: {$user->getSexo()}</li>";
                echo '</ul>';
            }

            $sql = "SELECT * FROM users WHERE sexo = 'F'";
            $result = $conn->query($sql);

            echo '<h2>Mujeres</h2>';

            foreach ($result as $k => $row) 
            {
                $user = createUserFromRow($row);
                echo '<ul>';
                echo "<li>Nombre: {$user->getName()}</li>";
                echo "<li>email: {$user->getEmail()}</li>";
                echo "<li>id: {$user->getid()}</li>";
                echo "<li>sexo: {$user->getSexo()}</li>";
                echo '</ul>';
            }
            $sql = "SELECT * FROM users WHERE sexo = 'N'";
            $result = $conn->query($sql);
            echo '<h2>No Binario</h2>';
            foreach ($result as $k => $row) 
            {
                $user = createUserFromRow($row);
                echo '<ul>';
                echo "<li>Nombre: {$user->getName()}</li>";
                echo "<li>email: {$user->getEmail()}</li>";
                echo "<li>id: {$user->getid()}</li>";
                echo "<li>sexo: {$user->getSexo()}</li>";
                echo '</ul>';
            }
        ?>
    </body>
</html>