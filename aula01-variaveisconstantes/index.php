<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title>
</head>
<body>
    <h2><?php
    echo "meu primeiro PHP \u{1F600}";

    /*
    comentario com varias 
    linhas serve para ordenar com outros deves ou continar
    pensamrntos do dia 
    */

    // quebra de linha antes do proximo echo
    echo "<br><br>";

    // variaveis
    $nome = "Roberto";
    $sobrenome = "Gomes";

    //variavel pode ser mudada
    $nome = "Roberto Nascimento ";

    echo "Seja Bem-Vindo, $nome $sobrenome";

    echo "<br> <br>";

    // contante = const nao pode ter dois indenyificador iguais 
    const time = "palmeiras";
        echo "Meu time de Futebol é "  . time;

    echo "<br> <br>";
    echo "seja bem - vindo, $nome $sobrenome seu time é " . time;
    echo "<br> <br>";

    // tipo de dados 
    $sobrenome2 = "Junior"; // string
    $idade = 31; //int
    $peso = 85.4; // float 
    $casado = false; // boolean
 
    echo "$sobrenome2 $idade $peso";
    echo "<br> <br>";

    // metodo 1: Usando var_dump para exibir o valor do booleano
    var_dump($casado);
    echo "<br> <br>";

    //Metodo2: usando uma conversão para string
    echo($casado ? "Casado" : "Não é casado");
    echo "<br> <br>";

    // tipos de informação primitivos
    var_dump($sobrenome2);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($peso);
    echo "<br> <br>";

    //constante e variavel dentro de outra variavel 
    $frase = "Meu time de futebol é " . time;
    $frase2 = " meu nome é $nome Meu sobrenome é $sobrenome";
    echo($frase);
    echo "<br>";
    echo($frase2);
    echo "<br>";

    
?>
</h2>
    <p>Meu primeiro Parágrafo</p>
    
</body>
</html>