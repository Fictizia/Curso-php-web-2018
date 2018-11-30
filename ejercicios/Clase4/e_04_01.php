<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <!-- tu form aqui !-->

    <!-- ejercicio :
        Haz un form que solicite un numero
        imprime el factorial de ese numero
    !-->
    <!--
        pseudocodigo (traducir a php)

        var resultado <- 1
        para ( i <-n ; mientras i > 0 ; i <- i - 1  )
            resultado <- resultado * 1
           
            imprimir resultado
    !-->


<form action="e_04_01.php" method="POST">
    <p>Su numero: <input type="text" name="numero" /></p>
    <p><input type="submit" /></p>
</form>

<?php


$numero = (int)$_POST['numero'];

$resultado =1;
for ($i = $numero; $i > 0; $i=$i -1) {
    $resultado = $resultado * $i; }

    echo $resultado ;

?>
  

</body>
</html>
