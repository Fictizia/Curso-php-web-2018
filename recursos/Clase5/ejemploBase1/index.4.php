<?php
    include_once ('datasource.php');
?>

<h1>solo chicas con un while</h1>
<ul>
    <?php
    $continue = true;
    $i = 0;
    while ($continue)
    {
        echo "<li>{$userArray[$i]['usuario']}: {$userArray[$i]['email']}</li>";
        //siguiente usuario
        $i++;
        $continue = ($userArray[$i]['sexo'] == 'F');
    }
    ?>
<ul>
