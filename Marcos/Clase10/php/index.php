<?php
    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');

    $servername = "mysql_db_C10";
    $serverport = "3306";
    $dbname = "clase10";
    $username = "devuser";
    $password = "devpass";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $serverport);

    $userRepository = new UserRepository($conn);
?>
<html>
    <head>
    </head>
    <body>
        <h1>Panel de usuarios</h1>
        <table class="table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Message</th>
            <th>Accepted</th>
            <th>OPS</th>
            </tr>
        </thead>
        <tbody>
          
        <?php
            $users = $userRepository->getAll();

            foreach ($users as $user) {
                echo "<tr>";
                    echo "<td>{$user->getId()}</td>";
                    echo "<td>{$user->getName()}</td>";
                    echo "<td>{$user->getEmail()}</td>";
                    echo "<td>{$user->getTelephone()}</td>";
                    echo "<td>{$user->getMessage()}</td>";
                    echo "<td>{$user->getAccepted()}</td>";
                    echo "<td>
                        <a href='update-user.php?user={$user->getId()}'>Update</a>
                        <a href='delete-user.php?user={$user->getId()}'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
        <a href='contacto.php'>Contacto</a>

   <h1>Panel de budget</h1>
        <table class="table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Servicio</th>
            <th>Observaciones</th>
            <th>Plazo</th>
            <th>Presupuesto</th>
            </tr>
        </thead>
        <tbody>
          
        <?php
            $budget = $budgetRepository->getAll();

            foreach ($users as $budget) {
                echo "<tr>";
                    echo "<td>{$budget->getId()}</td>";
                    echo "<td>{$budget->getServicio()}</td>";
                    echo "<td>{$budget->getObservaciones()}</td>";
                    echo "<td>{$budget->getPlazo()}</td>";
                    echo "<td>{$budget->getPresupuesto()}</td>";
                    echo "<td>
                        <a href='update-budget.php?budget={$budget->getId()}'>Update</a>
                        <a href='delete-budget.php?budget={$budget->getId()}'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
        <a href='Budget.php'>budget</a>
 
    </body>
</html>
