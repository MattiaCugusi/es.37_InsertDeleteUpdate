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
    $codProiezione = $_POST["codiceProiezione"];

    $sql = "DELETE FROM proiezioni WHERE CodProiezione = $codProiezione";

    if ($conn->query($sql)){
        if($conn->affected_rows > 0){
        echo "<p style='color: green'>eliminazione avvenuta</p>";
        }else{
        echo "<p style='color: blue'>Nessuna riga è stata eliminata</p>";
        }
    }else{
        echo "<p style='color: red'>Errore durante l'eliminazione</p>";
    }


    ?>
</body>
</html>