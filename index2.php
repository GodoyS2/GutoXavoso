<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

  $animais = ["🦑", "🐶", "🦄", "🐔", "🕷", "🦊", "🐣",];

  ###array_push($animais);

  $qtd = count($animais);

  $contador = 0;

  while($contador < $qtd){
    echo $animais[$contador] . "<br>";
    $contador++;
  }

?>
    
</body>
</html>