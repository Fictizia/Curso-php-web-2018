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
    <!-- 
        Conceptos en el ejercicio: 
        $_GET, foreach, strpos
        
        historia de usuario:

        Como _ usuario anonimo
        quiero _ filtar los parametros de la url 
        para _ ver los que contienen la letra 'a' y sus valores
        
        Dada una url, nuestro objetivo es:
        mostrar por pantalla los parametros de la url que contengan la letra 'a', así como su valor

        ejemplos de la url:
            url:
                localhost:8000/e_05_01.php?hola=caracola&adios=caiman&seeyou=cocodrilo
            resultado:
                encontrado parametro: hola con valor caracola
                encontrado parametro: adios con valor caiman
            url:
                localhost:8000/e_05_01.php?a=1&b=2&c=3
            resultado:
                encontrado parametro: a con valor 1
    !-->
    <!-- Cosas que mejorar:
        Si no hay ningun parametro en el array $_GET, sacar un mensaje por pantalla que
        avise de que no hay parametros

        Sacar una lista de los parametros recibidos para poder ver de un vistazo los que
        tienen o no tienen la letra 'a'

        Se admiten PR si hay comentarios, documentación y buenas prácticas :)
    !-->

    <?php
        $pajar = $_GET;
        
        $aguja = 'a';

        $i = 0;
        foreach ($_GET as $key => $value ){
            $pos = strpos($key,$aguja);
            if ($pos !== false){
                echo "encontrado parametro: $key con valor $value";
                $i++;
            }
        }
        if ($i == 0) {
            echo "no hay keys con la letra $aguja";
        }
        if (count($_GET) == 0) {
            echo 'no hay parametros en la url';
        }



        // Los parametros en la url se recogen en la variable superglobal $_GET
        // http://php.net/manual/es/language.variables.external.php
        // como no vamos a usar el post, no necesitamos form

        // Como no sabemos cuantos parametros vienen, usamos el bucle foreach
        // http://php.net/manual/es/control-structures.foreach.php

        // para saber si una cadena contiene otro cadena, usamos la funcion strpos:
        // http://php.net/manual/es/function.strpos.php
        // como tenemos que comprobar una condicion, usamos la estructura de control if
    ?>
    </body>
</html>
