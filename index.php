<?php

include __DIR__ . '/partials/functions.php';

?>

<!DOCTYPE html>
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
        <h1 class="text-primary">Strong Password Generator</h1>
        <h2 class="text-primary-emphasis mb-3">Genera una password sicura</h2>
        <?php
            session_start();
            if(isset($_GET['pswLength']) && !empty($_GET['pswLength'])){
                $uniqueCheck = (isset($_GET['uniqueCheck']) && !empty($_GET['uniqueCheck']));
                $charactersCheck = (isset($_GET['charactersCheck']) && !empty($_GET['charactersCheck']));
                $numbersCheck = (isset($_GET['numbersCheck']) && !empty($_GET['numbersCheck']));
                $specialCharCheck = (isset($_GET['specialCharCheck']) && !empty($_GET['specialCharCheck']));
                if($charactersCheck || $numbersCheck || $specialCharCheck){
                    $_SESSION['newRandomPassword'] = generateNewPassword($_GET['pswLength'], $uniqueCheck, $charactersCheck, $numbersCheck, $specialCharCheck);
                    header('Location: password.php');
                }
                else{
                    echo '<p class="text-danger">Seleziona almeno una delle tipologie di caratteri sottostanti</p>';
                }
            } else {
                echo '<p>Inserisci un numero da 1 a 16 per decidere la lunghezza della password da generare</p>';
            }
        ?>
        <form class="mb-3 border border-black rounded-3 bg-light p-3" action="index.php">
            <div>
                <label for="pswLength" class="form-label mb-4">Lunghezza password:</label>
                <input type="number" min="1" max="16" class="form-control d-inline-block w-auto" id="pswLength" name="pswLength" required>
            </div>
            <div>
                <label class="form-check-label mb-4" for="uniqueCheck">Solo caratteri non ripetuti</label>
                <input type="checkbox" class="form-check-input" id="uniqueCheck" name="uniqueCheck" value="unique">
            </div>
            <div>
                <label class="form-check-label mb-4" for="charactersCheck">Lettere</label>
                <input type="checkbox" class="form-check-input" id="charactersCheck" name="charactersCheck" value="characters">
            </div>
            <div>
                <label class="form-check-label mb-4" for="numbersCheck">Numeri</label>
                <input type="checkbox" class="form-check-input" id="numbersCheck" name="numbersCheck" value="numbers">
            </div>
            <div>
                <label class="form-check-label mb-4" for="specialCharCheck">Simboli</label>
                <input type="checkbox" class="form-check-input" id="specialCharCheck" name="specialCharCheck" value="special">
            </div>
            <button type="submit" href="" class="btn btn-primary d-block m-auto mt-5">Genera Password</button>
        </form>
    </main>
</body>

</html>