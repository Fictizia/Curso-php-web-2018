<?php
include_once ('datasource.php');
?>

<h1>Solo chicas</h1>
<ul>
    <?php
    foreach ($userArray as $row)
    {
        if ($row['sexo'] == 'F')
        {
            //echo "<li>{$row['usuario']}: {$row['email']}</li>";
            //var_dump($row['tareas']);
            $segundoArray = $row['tareas'];
            foreach($segundoArray as $tareas){
                echo $tareas;
                echo '<br />';
            }
        }
    }
    ?>
<ul>

</ul>
