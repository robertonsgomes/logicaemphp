<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
function saudacao(){
    echo " Olá, Boas-vindas ao PHP!";
}

saudacao(); //chama a função

echo "<br><br>";

function somar($a, $b) {
    return $a + $b;
}

$resutado = somar(5, 3); // chama a função e passando os argumentos
echo "resutados da soma: " . $resutado;
echo "<br><br>";

function saudacaoPersonalizada($nome = "visitante") {
    echo "Olá, $nome! Boas-vinds ao nosso site!";
}
saudacaoPersonalizada(); // chamada sem argumento, usa o valor padrão
echo "<br>";
saudacaoPersonalizada("calors"); // Chamada com argumento
echo "<br><br>";  //dica "espaço" = a letra maiuscusla para indentificação

function encontrarMaiorValor($array) {
    return max( $array); // Função max() encontra o maior valor no array
}

$valores = [2, 5, 9, 1, 3,];
echo "o maior valor é: " . encontrarMaiorValor($valores);

echo "<br><br>";
?>
    
</body>
</html>