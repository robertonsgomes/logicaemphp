<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php 
    //Declarando uma nova classe
    class carro{
        //aributos e visibilidade 
        public $marca;
        public $modelo;
        public $ano;

        //metodo (funçoes dentro da classe)
        public function exbirDetales(){
            echo "marca: " . $this->marca . "<br>";
            echo "modelo: " . $this->modelo . "<br>";
            echo "ano: " . $this->ano . "<br><br>";
        }
    }

    // objetos (instância)
    $meuCarro = new carro();
    $meuCarro->marca = "toyota";
    $meuCarro->modelo = "corola";
    $meuCarro->ano ="2023";

    //chamar função para exibir os detalhes do carro 
    $meuCarro->exbirDetales();

    // enstanciando novo carro
    $meuNovoCarro = new carro();
    $meuNovoCarro->marca ="BMW";
    $meuNovoCarro->modelo = "320i";
    $meuNovoCarro->ano = 2025;

    //exibir a função para o novo objeto 
    $meuNovoCarro->exbirDetales();

    
    class Pessoa{
        //Atributos (propriedades)
        public $nome;
        public $idade;

        //Metodo
        public function saudacao(){
            echo "Olá, meu nome é " . $this->nome . "e tenho " . $this->idade . " anos.<br><br>";
        }
    }

    //intaciando uma nova pessoa 
    $joao = New Pessoa();
    $joao->nome = "João";
    $joao->idade = 30;

    //Exibindo a saudação e dados do João 
    $joao->saudacao();
    
    ?>
</body>
</html>