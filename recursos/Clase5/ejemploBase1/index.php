<ul>
    <?php
    include_once ('datasource.php');

    foreach ($userArray as $row)
    {
        echo "<li>{$row['usuario']}: {$row['email']}</li>";
    }
    ?>
</ul>
