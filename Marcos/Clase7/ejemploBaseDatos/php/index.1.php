<?php
    $servername = "mysql_db";
    $serverport = "3306";
    $dbname = "clase7";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);
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
                echo "<li>{$row['id']}: name: {$row['name']} email: {$row['email']}</li>";
            }
        ?>
    </body>
</html>
