<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While, Ido While, for, Foraach</title>
</head>
<body>
    <?php 
    
    //Whiele
echo "<h1> While </h1><br>";    
    $i =1;
    while ($i <=5) {
        echo $i . "<br>";//imprime ovalor do $i e pula para a próxima linha
        $i++; //++ atribuição e a mesma coisa de $i +1
    }
    echo "<br><br>";

    $j = 2 ;
    while ($j <= 10) {
        echo $j . "<br>"; //impremir numeros pares 
        $j += 2; //acrecentar de 2 em 2 
    }
    echo "<br>";

//DO While - faça em quanto
echo "<h1> Do While </h1><br>";
$m =1;
do { 
    echo $m . "<br>";
    $m++;
} while ($m <= 5);
echo "<br><br>";// Do While executa pelo menos uma vez mesmo a execução for negativa
echo "<h1> For </h1> <br>";
//for 
for ($n = 1; $n <= 5 ; $n ++){
    echo $n . "<br>";
}echo "<br><br>";
for ($p = 1; $p <=5; $p++){
    echo "O quadrado de $p e " . ($p * $p) . "<br>";
}echo "<br><br>";
echo " <h1> Foreach </h1> <br>";
$frutas =[ "Maça", "Banana", "Laranja", "Uva"];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>"; // Imprime o nome de cada fruta 
}echo "<br><br>";
$idades =[
    "João " => 25,
    "Maria" => 30,
    "Pedro" => 22
];

foreach($idades as $nome => $idade) {
    echo "$nome tem $idade anors. <br>";// exibe nomes e idades 
}
    ?>
    
</body>
</html>