<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-success-subtle">
    <main class="text-center mt-5 container">
        <div class="border border-black rounded-3 bg-light p-3">
            <?php echo$_SESSION['tooLong']? '<h6 class="text-danger">Il numero di caratteri disponibili è inferiore alla lunghezza della password desiderata, non è stato possibile generare solo caratteri non ripetuti</h6 class="text-danger">':'' ?>
            <h1 class="text-primary">La password che hai generato è la seguente</h1>
            <h2><?php echo $_SESSION['newRandomPassword']; ?></h2>
            <a class="btn btn-primary" href="index.php">Torna alla home</a>
        </div>
    </main>
</body>
</html>