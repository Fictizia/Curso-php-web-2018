<?php
    include_once ('datasource.php');
?>

<h1>tres primeros</h1>
<ul>
    <?php
    for ($i = 0; $i <=2; $i++)
    {
        echo "<li>{$userArray[$i]['usuario']}: {$userArray[$i]['email']}</li>";
    }
    ?>
<ul>
