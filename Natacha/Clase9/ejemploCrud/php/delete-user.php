<?php
    require_once('./bbdd-conn.php');
    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');
    require_once('./utils.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    $userRepository = new UserRepository($conn);
    
    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $userId = $_GET['user'];
?>

<h1>User To delete <?php echo $userId; ?></h1>
<?php

    $user = $userRepository->getById($userId);
    $deleted = $userRepository->delete($user);
    if ($deleted) {
        echo "<p> user properly deleted </p>";
    } else {
        echo "<p> error: not deleted </p>";
        echo "<p> $conn->error() </p>";
    }
?>
<a href='./index.php'>back to main </a>

