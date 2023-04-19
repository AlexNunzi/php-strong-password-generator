<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="text-center mt-5 container">
    <h1 class="text-primary">La password che hai generato è la seguente</h1>
    <p><?php echo $_SESSION['newRandomPassword']; ?></p>
    </main>
</body>
</html>