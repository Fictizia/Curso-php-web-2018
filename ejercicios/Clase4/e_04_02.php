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
    <form action="" method="post">
    <p>Ovejas: <input type="text" name="numero" /></p>
    <p><input type="submit" /></p>
    </form>

    <?php
        $n = (int)$_POST['numero'];

        echo "Mostrando $n ovejas<br />";

        for($i = $n; $i > 0; $i--) {
            echo '<img src="images/Oveja.jpg" width="100" />';
        }
        
    ?>
    <!-- ejercicio :
        Haz un form que solicite un numero
        pinta tantas ovejas como haya contado ese numero
    !-->
    <!--  
        para ( i <-n ; mientras i > 0 ; i <- i +1  )
            dibuja oveja
    !-->
</body>
</html>
