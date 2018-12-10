<?php
    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');

    $servername = "mysql_db_C9";
    $serverport = "3306";
    $dbname = "clase9";
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
    $userSex = $_POST['sex'];

    //@TODO busca la manera correcta de saber si es un get o un post
    $isAPost = false;
    if ($userName && $userEmail && $userSex) {
        $isAPost = true;
    }
?>

<?php
    //@DONE: aqui los datos no se refrescan bien cuando se cambian... puedes arreglarlo?
    if ($user) {
        echo '
            <h1>ID ' . $user->getId() .'</h1>
            <form action="update-user.php?user=' . $user->getId() .'" method="post">
                <p>User Id: <input type="text" name="name" value="' . $user->getId() . '"/></p>
                <p>User name: <input type="text" name="name" value="' . $user->getName() . '" /></p>
                <p>User email: <input type="text" name="email" value="' . $user->getEmail() . '"/></p>
                <p>User sex (F/M/N): <input type="text" name="sex" value="' . $user->getSexo() . '"/></p>
                <p><input type="submit" /></p>
            </form>
        ';
    } else {
        echo "user not found with id: {$userId}</p>";
    }

    if ($user && $isAPost) {
        $userToUpdate = $userRepository::createFromVariables($userId, $userName, $userEmail, $userSex);
        $updated = $userRepository->update($userToUpdate);
        if ($updated) {
            $user = $userRepository->getByEmail($userEmail);
            echo "<p>usuario modicado: </p><ul>";
            echo "<li>ID: {$user->getId()}</li>";
            echo "<li>Nombre: {$user->getName()}</li>";
            echo "<li>Email: {$user->getEmail()}</li>";
            echo "<li>Sexo: {$user->getSexo()}</li></ul>";
        } else {
            echo "<p>usuario no pudo ser modificado</p>";
            echo "<p>{$conn->error}</p>";
        }
    }

?>
<a href='./index.php'>back to main </a>

