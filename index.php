<?php 
include __DIR__. "/genp.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Pasword Generatore</title>
</head>
<body class="bg-dark">
    <div class="container">
        <h1 class="my-5 text-white">GENERA PASSWORD</h1>
        <div>
        <form class="form-control p-3" action="./index.php" method="GET">
            <div>
                <label>Lunghezza password:</label>
                <input type="number" name="createPassword" min="0">
            </div>
            <button type="submit" class="btn btn-success mt-3">GENERA</button>
        </form>
        <?php if(isset($password)){ ?>
            <p class="alert alert-success mt-4">
                La tua nuova password é: <?= $password ?>
            </p>
        <?php } ?>
    </div>
    </div>
</body>
</html>