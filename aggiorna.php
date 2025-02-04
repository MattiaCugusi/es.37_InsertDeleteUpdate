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
    $codVoto = $_POST["codiceVoto"];
    $nuovoVoto = $_POST["nuovoVoto"];

    $sql = "UPDATE recensioni SET Voto = $nuovoVoto WHERE IdRecensione = $codVoto";
    
    if ($conn->query($sql)){
        if($conn->affected_rows > 0){
        echo "<p style='color: green'>Aggiornamento avvenuto</p>";
        }else{
        echo "<p style='color: blue'>Nessuna riga è stata aggiornata</p>";
        }
    }else{
        echo "<p style='color: red'>Errore durante l'aggiornamento</p>";
    }

    ?>
</body>
</html>
