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
$idade = 18;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos";
}


$corEscolhida = "verde";
$corHexa = "";
 
switch($corEscolhida){
    case "vermelho":
        $corHexa = "#ff0000";
        break;
    case "azul":
        $corHexa = "#0000ff";
        break;
    case "verde":
        $corHexa = "#00ff00";
        break;
    default:
        $corHexa = "#000000";
        break;
}
echo "<h1 style='color:$corHexa'>Salve</h1>";

    // if($corEscolhida == "vermelho"){​​
//     $corHexa = "#ff0000";
// }​​elseif($corEscolhida == "azul"){​​
//     $corHexa = "#0000ff";
// }​​elseif($corEscolhida == "verde"){​​
//     $corHexa = "#00ff00";
// }​​else{​​
//     $corHexa = "#000000";
// }​​

     ARRAY
// $fruta01 = '🍓';
// $fruta02 = '🍇';
// $fruta03 = '🥥';
// $frutas = array();
// $frutas[0] = "🍓";
// $frutas[1] = "🍇";
// $frutas[2] = "🥥";
$frutas = ["🍓", "🍇","🥥"];
$frutas[3] = "🍍";
array_push($frutas, "🍒");
// echo gettype($frutas);
echo count($frutas);
echo "<h1>salada de frutas</h1>";
// $qtd = count($frutas);
// $contador = 0;
// while($contador < $qtd){​​
//     // echo "$contador <br>";
//     echo $frutas[$contador];
//     $contador++;
// }​​

    ?>
    
</body>
</html>
