<?php
    //@todo incluye aqui tu fuente de datos 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ejercicio 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <!-- 
        Conceptos en el ejercicio: 
        foreach
        
        historia de usuario:

        Como _ gestor de equipos
        quiero _ listar al equipo y ver su numero de tareas pendientes 
        para _ xxxxx
        
        Dada nuestra fuente de datos 'datasource':
        mostrar por pantalla todos los usuarios y su numero de tareas
    !-->
    
        <?php
        /*
            [
                'usuario' => 'maria gonzalez', 
                'email' => 'mariag@fakemail.com',
                'sexo' => 'F',
                'tareas' => [
                    'hacer ejercicio de java'
                ],
            ],
        */

        include_once ('datasource.php');
        echo '<ul>';
        foreach ($userArray as $row)
        {
            echo "<li>{$row['usuario']}";
            $tareas = $row['tareas'];
            $nTareas = count($tareas);
            echo " tiene $nTareas pendientes</li>";
        }
        echo '</ul>';
        ?>
    </body>
</html>
