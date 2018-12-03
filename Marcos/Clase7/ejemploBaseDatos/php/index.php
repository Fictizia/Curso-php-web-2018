<html>
    <head>
    </head>
    <body>

        <h1>test php ini</h1>
        <?php
            $servername = "mysql_db";
            $serverport = "3306";
            $dbname = "clase7";
            $username = "devuser";
            $password = "devpass";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected successfully";
        ?>
    </body>
</html>
