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
            echo "<li>{$row['usuario']}: {$row['email']}</li>";
        }
    }
    ?>
<ul>

<h1>Solo chicos</h1>
<ul>
    <?php
    foreach ($userArray as $row)
    {
        if ($row['sexo'] == 'M')
        {
            echo "<li>{$row['usuario']}: {$row['email']}</li>";
        }
    }
    ?>
</ul>
