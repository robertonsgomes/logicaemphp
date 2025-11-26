<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores</h1>
<?php
//operadores
$a = 5;
$b = 3;
$soma = $a + $b;
$subtracao = 4 - 2;
$multiplicacao = 4 * 3;
$potenciacao = 2 ** 2;
$divisao = $a / $b;
$restodivisao = $a % $b;
echo "Resutado da soma é $soma <br>";
echo "Resutado da subtracao é $subtracao <br>";
echo "Resultado da multiplicação é $multiplicacao <br>";
echo "Resultado da potenciação é $potenciacao <br>";
echo "Resultado da divisão é $divisao<br>";
echo "Resultado do resto da divisão é $restodivisao";
echo "<br> <br>";
$rua = "Rua Amador Bueno";
$rua .= "na cidade de sao paulo";


$preco = 2.45;
$preco += 2.30;
$preco -= 1.30;
//formata o numero para usar virgula como separador decimal 
$c =10;
$d = "10";

echo"<br> <h1> Comparação de igualdade </h1>";
    echo($c == $d) ? "São iguais." : "Não são iguais.";
    echo "<br>";
    echo($c === $d) ? "São estritamente iguais." : "Não são estritamente iguais.";
 
    echo"<br> <h1> Comparação de diferença </h1>";
    echo($c != $d) ? "São diferentes." : "Não são diferentes.";
    echo "<br>";
    echo($c !== $d) ? "São estritamente diferentes." : "Não são estritamente diferentes.";
 
    $teste = false;
    echo"<br> <h1> Negação </h1>";
    echo(!$teste) ? "É verdadeiro." : "É falso.";

$e = 5;
$f = 3;
echo "<br> <h1> maior que e Menor que </h1>";
echo ($e > $f) ? "e é maior que f." : "E não é maior que F.";
echo"<br>";
echo ($e < $f) ? "E é menor que F." : "E não e menor que F.";

$h = 4;
$i = 4;
$j = 2;
echo "<br> <h1> maior ou Igual a, Menor ou Igual a </h1>";
echo ($h >= $i) ? "H e maior ou igual a I" : "H não é maior ou igual I";
echo "<br>";
echo ($e <$f) ? "Ié menor ou igual a J." : "I não emenor ou igual a J";

    //operadores logicos
    $idade = 20;
    $tem_cnh = true;
    echo "<br> <h1> operadores logicos </h1> <br>";
    echo ($idade >= 18 and $tem_cnh) ? "Voce pode dirigir" : "Voce nao pode dirigir";
    echo "<br>";

    $tem_ingresso = true;
    $sem_ingresso = false;
    echo($tem_ingresso or $sem_ingresso) ? "Você pode entrar na festa." : "Você não pode entra na festa.";
    echo "<br>";

    // && para and e || para or
    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo ($sol && $sem_chuva || $feriado) ? "você pode sair para passear." : "melhor ficar em casa. <br>";
    


?>

</body>
</html>