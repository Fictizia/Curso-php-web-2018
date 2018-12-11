<?php
    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');

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
    $userId = $_GET['user'];
    $user = $userRepository->getById($userId);
     
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userTelephone = $_POST['telephone'];
    $userMesagge = $_POST['message'];
    $userAccepted = $_POST['accepted'];

    //@TODO busca la manera correcta de saber si es un get o un post
    $isAPost = false;
    
    if ($_SERVER["REQUEST_METHOD"] == 'POST' ) {
        $isAPost = true;
    }






echo "<h1>{$user->getId()}</h1>";
    

    //@TODO: aqui los datos no se refrescan bien cuando se cambian... puedes arreglarlo?
    if ($user) {
        echo '
            <form action="update-user.php?user=' . $user->getId() .'" method="post">
                <p>User Id: <input type="text" name="name" value="' . $user->getId() . '"/></p>
                <p>User name: <input type="text" name="name" value="' . $user->getName() . '" /></p>
                <p>User email: <input type="text" name="email" value="' . $user->getEmail() . '"/></p>
                <p>User telephone: <input type="text" name="telephone" value="' . $user->getTelephone() . '"/></p>
                <p>User message: <input type="text" name="message" value="' . $user->getMessage() . '"/></p>
                <p>User message: <input type="text" name="message" value="' . $user->getAccepted() . '"/></p>
                <p><input type="submit" /></p>
            </form>
        ';
    } else {
        echo "user not found with id: {$userId}</p>";
    }

    if ($user && $isAPost) {
        $userToUpdate = $userRepository::createFromVariables($userId, $userName, $userEmail, $userTelephone, $userMessage, $userAccepted);
        $updated = $userRepository->update($userToUpdate);
        if ($updated) {
            $user = $userRepository->getByEmail($userEmail);
            echo "<p>usuario modicado: {$user->getName()} esto es el email {$user->getEmail()} </p>";
        } else {
            echo "<p>usuario no pudo ser modificado</p>";
            echo "<p>{$conn->err}</p>";
        }
    }

?>
<a href='./index.php'>back to main </a>

