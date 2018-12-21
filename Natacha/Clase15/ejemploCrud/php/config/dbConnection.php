<?php
    $servername = "mysql_db_C15";
    $serverport = "3306";
    $dbname = "clase15";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);
