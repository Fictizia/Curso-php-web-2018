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

</ul>
