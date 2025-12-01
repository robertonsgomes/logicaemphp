<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Criação de vetor / Array indexado
    $array = [10, 20, 30, 40];

    // exibvindo o array
    echo "Array original:";
    print_r($array); // printi() exibe o array de forma legivel
    echo "<br><br>";
    // adicinado o valor no final
    $array[] =50;
    
    //exibendo o array atualizado
    echo "Array apos adicinar 50:";
    print_r($array);
    echo"<br>";

    // alterando o valor na posição 1 para 25
    $array[1] = 25;

    //exbindo o array após a alteração
    echo"Array apos alterar o valor na 1 para 25:";
    print_r($array);
echo"<br><br>";

// remover o valor na posição 2
    unset($array[2]);
    //reorganização os indeces de array
    $array= array_values($array);
    //exibendo o array após remover o valor
    echo "array após remover o valor na posiçao 2:";
    print_r($array);
echo"<br>";
    //adicinando varios valores
    array_push($array, 60,3,22);
    print_r($array);
    Echo "<br>";

    //ordenando o vetor 
    sort($array);

    //exibendo o vetor ordenado
    echo "array apos ordenar os valores";
    print_r($array);
    echo"<br><br>";

    // array associativo
    $associativo = [
        "nome" => "joão",
        "idade" => 30,
        "Cidade" => "São Paulo"
    ];

    // exibendo o array associativo
    echo "array associativo:";
    print_r($associativo);
echo"<br><br>";

// Crinando um Array multidimensinal (conhecido como matrix tbm )
$multi= [
    [1, 2, 3,],
    [4, 5, 6,],
    [7, 8, 9,]
];

    //exibendo o valor na posição [1][2] (4, 5, 6) -> 6
    echo "valor na posição [1][2] " . $multi[1][2];

echo"<br><br>";

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    //meclando dois arrays
    $novo_array = array_merge($array1, $array2);
    // exibendo o array resultante
    echo "array mesclado";
    print_r($novo_array);
echo"<br><br>";

//função array_search()
    $numeros = [2, 4, 6, 30, 8];

    //procurando o valor 30 no array
    $indice = array_search(30, $numeros);

    // exibendo o indice onde o valor foi encontrado
    echo "O indice do valor 30 é: " . $indice;
    echo"<br><br>";
    print_r($numeros);
echo"<br><br>";

    //função in_array()
    //vericando se o valor 25 está no array
    $existe = in_array(25, $numeros);

    //exibendo se o valor existe ou não
    if($existe){
        echo "o valor 25 no array.";
    } else {
        echo "valor 25 não está no array.";
    }
    echo"<br><br>";


    ?>
</body>
</html>