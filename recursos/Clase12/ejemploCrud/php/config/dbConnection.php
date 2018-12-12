<?php
    $servername = "mysql_db_C12";
    $serverport = "3306";
    $dbname = "clase12";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);
