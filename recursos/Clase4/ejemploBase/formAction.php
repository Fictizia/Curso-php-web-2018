

Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> años.<br/>
El dia de la semana es <?php echo $_POST['dia_semana']; ?>

<?php 
    var_dump($_POST);
    var_dump($_GET);
    var_dump($_SERVER);
    var_dump($_GLOBALS);
    var_dump($_SESSION);
?>
