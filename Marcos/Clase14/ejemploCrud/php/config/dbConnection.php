<?php
    $servername = "mysql_db_C14";
    $serverport = "3306";
    $dbname = "clase14";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);
