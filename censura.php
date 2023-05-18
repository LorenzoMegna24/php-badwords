<?php 
$paragrafo = $_POST['sezioneParagrafo'];
$censura = $_POST['sezioneParola'];

$risultato = str_replace($censura, '****', $paragrafo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura</title>
</head>
<body>

  <h2>Frase censurata</h2>
  <p><?php echo $paragrafo ?></p>
  <p><?php echo $risultato ?></p>
  
</body>
</html>