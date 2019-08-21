<?php
    require_once('./autoload.php');

    $userRepository = new UserRepository($conn);
    
    //de aqui para abajo, estamos recogiendo los datos que necesitamos para 
    //empezar a trabajar
    $userId = $_GET['user'];
?>

<h1>User To delete <?php echo $userId; ?></h1>
<?php

    $user = $userRepository->getById($userId);
    $deleted = $userRepository->delete($user);
    /* todo * ver ejemplo julieta clase 13 */

    if ($deleted) {
        echo "<p> user properly deleted </p>";

    } else {
        echo "<p> error: not deleted </p>";
        echo "<p> $conn->error() </p>";
    }
?>
<a href='./index.php'>back to main </a>

