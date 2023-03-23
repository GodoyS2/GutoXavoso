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



/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão mostrar "menor de idade" e a quantidade de anos que falta para a pessoa ser maior de idade */
$idade = 10;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos";
}
    ?>
    
</body>
</html>