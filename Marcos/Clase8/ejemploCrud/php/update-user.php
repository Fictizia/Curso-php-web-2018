<?php
    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');

    $servername = "mysql_db_C8";
    $serverport = "3306";
    $dbname = "clase8";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    $userRepository = new UserRepository($conn);
    
    $userId = $_GET['user'];
    $user = $userRepository->getById($userId);
?>

<h1>UPDATE User con ID PON AQUI LA ID</h1>

<?php
    if ($user) {
        echo '
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

    if ($user) {
        $userToUpdate = $userRepository::createFromVariables($userName, $userEmail, $userSex);
        $updated = $userRepository->update($userToUpdate);
        if ($updated) {
            $user = $userRepository->getByEmail($userEmail);
            echo "<p>usuario modicado: PINTA AQUI LOS DATOS</p>";
        } else {
            var_dump($user);
            echo "<p>usuario no pudo ser modificado</p>";
            echo "<p>{$conn->err}</p>";
        }
    }

?>
<a href='./index.php'>back to main </a>
