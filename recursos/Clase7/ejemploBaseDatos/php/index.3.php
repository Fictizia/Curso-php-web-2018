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

        return $newUser;
    }
?>
<html>
    <head>
    </head>
    <body>
        <h1>Listar de No binarios</h1>
        <?php
            $sql = "SELECT * FROM users WHERE sexo = 'N'";
            $result = $conn->query($sql);
            foreach ($result as $k => $row) 
            {
                $user = createUserFromRow($row);
                echo "<li>name: {$user->getName()}</li>";
            }
        ?>
        <h1>Listar de CHICOS</h1>
        <?php
            $sql = "SELECT * FROM users WHERE sexo = 'M'";
            $result = $conn->query($sql);
            foreach ($result as $k => $row) 
            {
                $user = createUserFromRow($row);
                echo "<li>name: {$user->getName()}</li>";
            }
        ?>
        <h1>Listar de CHICAS</h1>
        <?php
            $sql = "SELECT * FROM users WHERE sexo = 'F'";
            $result = $conn->query($sql);
            foreach ($result as $k => $row) 
            {
                $user = createUserFromRow($row);
                echo "<li>name: {$user->getName()}</li>";
            }
        ?>

    </body>
</html>
