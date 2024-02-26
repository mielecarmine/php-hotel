<?php
require_once("./data.php")


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <form action="./index.php" method="GET">
            <input type="text">
        </form>
        <h1 class="mt-3 mb-3">Tabella Hotel Disponibili</h1>
        <table class="table">
            <thead>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Description</b></td>
                    <td><b>Parking</b></td>
                    <td><b>Vote</b></td>
                    <td><b>Distance to center</b></td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($hotels as $hotel): ?>
                <tr>
                    <td>
                        <?= $hotel["name"] ?>
                    </td>
                    <td>
                        <?= $hotel["description"] ?>
                    </td>
                    <td>
                        <?php
                        if ($hotel["parking"] == 1) {
                        echo 'yes'; }
                        else {
                            echo 'no';
                        }
                        ?>
                    </td>
                    <td>
                        <?= $hotel["vote"] ?>
                    </td>
                    <td>
                        <?= $hotel["distance_to_center"] ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</body>
</html>