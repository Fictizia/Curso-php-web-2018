<?php
    $servername = "mysql_db_C13";
    $serverport = "3306";
    $dbname = "clase13";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);
