
<?php
session_start();
?>
<html>
    <head>
        <title>Las sesiones</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
<body>
    <?php
    if(isset($_POST['enviar'])){
        if(empty($_POST['usuario']) || empty($_POST['password']))
            echo 'Debes llenar todos los datos';
        elseif($_POST['usuario']=="test" and $_POST['password']=="test"){
            $_SESSION['usuario']=$_POST['usuario'];
            $_SESSION['password']=$_POST['password'];
            echo 'Logueado como '.$_SESSION['usuario'];
        }
    }
    ?>
    <form name="login" method="post" action="login.php">
        <p> Usuario: <input name="usuario" type="text" id="usuario"> </p>
        <p>Password: <input name="password" type="password" id="password"></p>
        <input name="enviar" type="submit" id="enviar" value="Enviar">
    </form>
    <p> si entras como test/test, te logueará y podras ver el link de abajo.</p>
    <a href="logedpage.php">IR A PAGINA RESTRINGIDA</a>
</body>