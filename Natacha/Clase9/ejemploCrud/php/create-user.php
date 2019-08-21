<?php
    require_once('./autoload.php');


    //@DONE este codigo que se repite, se puede poner en un fichero aparte
    //@TODO MEDIUM con estos datos, se puede crear una clase de base de datos
    //@TODO MEGATODO: Busca una base de datos Singleton y trata de que funcione en 
    //este codigo

    $userRepository = new UserRepository($conn);

    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userSex = $_POST['sex'];
    ?>

<h1>Create User</h1>

<form action="create-user.php" method="post">
    <p>User name: <input type="text" name="name" /></p>
    <p>User email: <input type="text" name="email" /></p>
    <p>User sex (F/M/N): <input type="text" name="sex" /></p>
    <p><input type="submit" /></p>
</form>

<?php

    if (isAPost()) {
        $user = $userRepository->getByEmail($userEmail);
        if (!$user) {
            $newUser = $userRepository::createFromVariables(null, $userName, $userEmail, $userSex);
            $created = $userRepository->insert($newUser);
            if ($created) {
                $user = $userRepository->getByEmail($userEmail);
                echo "<p>usuario creado con id {$user->getId()}</p>";
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

