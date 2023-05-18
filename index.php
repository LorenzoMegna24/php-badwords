<?php

$nome = "Lorenzo"

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro php</title>
</head>
<body>
  
<h1>Ciao <?php echo $nome ?></h1>

<form action="censura.php" method="POST">
  
  <label for="">Paragrafo</label>
  <input type="text" placeholder="Inserisci qualcosa" name="sezioneParagrafo">

  <label for="">Parola da censurare</label>
  <input type="text" placeholder="Inserisci parola" name="sezioneParola">

  <button type="submit">invio</button>

</form>

</body>
</html>