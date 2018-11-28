<?php
    //@todo incluye aqui tu fuente de datos 
?>
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
        foreach
        
        historia de usuario:

        Como _ responsable de inclusion
        quiero _ listar al equipo por chicos y chicas 
        para _ xxxxx
        
        Dada nuestra fuente de datos 'datasource':
        mostrar por pantalla en una lista las chicas y en otra lista los chicos
    !-->
    <h1>Solo chicas</h1>
    <ul>
        <?php
        foreach ($userArray as $row)
        {
            if ($row['sexo'] == 'F')
            {
                echo "<li>{$row['usuario']}: {$row['email']}</li>";
            }
        }
        ?>
    <ul>
    </body>
</html>
