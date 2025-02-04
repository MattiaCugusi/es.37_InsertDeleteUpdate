<?php
include ('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $codAttore = $_POST["codice"];
    $nomeAttore = $_POST["nome"];
    $dataNascita = $_POST["data"];
    $nazionalita = $_POST["nazionalita"];

    $sql = "INSERT INTO attori VALUES ($codAttore, '$nomeAttore', $dataNascita, '$nazionalita')";

    if ($conn->query($sql)){
        echo "<p style='color: green'>Inserimento avvenuto</p>";
    }else{
        echo "<p style='color: red'>Errore durante l'inserimento</p>";
    }

    ?>
</body>
</html>