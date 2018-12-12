<?php
    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');

    //@TODO este codigo que se repite, se puede poner en un fichero aparte
    //@TODO MEDIUM con estos datos, se puede crear una clase de base de datos
    //@TODO MEGATODO: Busca una base de datos Singleton y trata de que funcione en 
    //este codigo
    $servername = "mysql_db_C10";
    $serverport = "3306";
    $dbname = "clase10";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    $userRepository = new UserRepository($conn);

    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userTelephone = $_POST['telephone'];
    $userMessage = $_POST['message'];
    $userAccepted = $_POST['accepted'];

    $isAPost = false;
    if ($userName && $userEmail && $userTelephone && $userMessage && $userAccepted) {
        $isAPost = true;
    }
    ?>

<h1>Create User</h1>

<form action="contacto.php" method="post">
    <p>User name: <input type="text" name="name" /></p>
    <p>User email: <input type="text" name="email" /></p>
    <p>User telephone: <input type="text" name="telephone" /></p>
    <p>User message: <input type="text" name="message" /></p>
    <p>User accepted: <input type="checkbox" name="accepted" value="1" /></p>
    <p><input type="submit" /></p>
</form>

<?php

    if ($isAPost) {
        $user = $userRepository->getByEmail($userEmail);
        if (!$user) {
            $newUser = $userRepository::createFromVariables(null, $userName, $userEmail, $userTelephone, $userMessage, $userAccepted);
            $created = $userRepository->insert($newUser);
            if ($created) {
                $user = $userRepository->getByEmail($userEmail);
                echo "<p>usuario creado con id @TODO PON AQUI EL ID DEL USUARIO </p>";
            } else {
                echo "<p>usuario no pudo ser creado</p>";
                echo "<p>{$conn->error}</p>";
            }
        } else {
            echo "<p>user with email: {$userEmail} already exists</p>";
        }
    }
?>
<a href='./index.php'>back to main </a>

