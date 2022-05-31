<div class="title">Classe</div>

<?php

class Cliente {
    // atributos
    public $name = 'Akio';
    public $idade = 18;

    public function apresentar() {
       return "Nome: {$this->name} <br>
        Idade: {$this ->idade}";
    }

}

$c1 = new Cliente();
echo $c1->apresentar(), '<br>';


$c1 = new Cliente();
$c1->name = "Andrei";
$c1->idade = 21;
echo $c1->apresentar(), '<br>';

echo $c1->name;
echo "<br>";
echo $c1->idade;
?>

<div class="title">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;
    
    function __construct($novonome, $idade = 18) {
        echo "Contrutor invocado ! <br>";
        $this->nome = $novonome;
        $this->idade = $idade;

        
    }

    function __destruct() {
        echo "E morreu!";
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoa = new Pessoa("Scarllet Crimson", 20);
$pessoa->apresentar();
unset($pessoa);




?>



