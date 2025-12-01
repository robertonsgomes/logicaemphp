<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php 
    //condicionais if = si ou comparação 
    if(1 < 2){
        echo "O numero 1 e menor <br><br>";
    }

    $idade = 18;

    if($idade >= 18) {
        echo "voce e maior de idade.<br><br>";
    }
    // condicional else
    $a =10;
    $b =14;

    if($a ==$b){
        echo "as Variaveis são iguais.";
    } else{
        echo "as variaveis sao diferentes.";
    }
echo "<br> <br>";

    // condisional elseif
    $idadepessoa = 25;
    if($idadepessoa<= 13 && $idadepessoa <= 19){
        echo "voce e uma criança";
    }else if ($idadepessoa >=20 && $idadepessoa<= 59){
echo "voce e um adulto.";
    }else {
        echo "voe idoso.";
    } echo "<br> <br>";

    //condicinal switch
    $numero = 3;
    switch(true){
        case($numero <5):
        echo "O numero e menor que 5.";
        break;
        case($nemero=5):
        echo " O numero e igual a 5.";
        break;
        default:
        echo "numero não indentificado";
        break;
    }
    echo"<br><br>";

    $animal = "gato";
    switch ($animal){
        case "cachorro":
        echo "É um cachorro";
        break;
        case "peixe":
            echo "É um peixe";
            break;
            default: 
            //so executa se nenhum animal case anterior bater
            echo"Animal não encontrado";
            break;
            echo "<br><br>";
    }





    ?>
</body>
</html>