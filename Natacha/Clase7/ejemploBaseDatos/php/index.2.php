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
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            foreach ($result as $k => $row) 
            {
                $user = createUserFromRow($row);
                echo '<ul>';
                echo "<li>name: {$user->getName()}</li>";
                echo "<li>email: {$user->getEmail()}</li>";
                echo "<li>id: {$user->getid()}</li>";
                echo "<li>sexo: {$user->getSexo()}</li>";
                echo '</ul>';
            }
        ?>
    </body>
</html>

