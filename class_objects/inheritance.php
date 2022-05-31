<div class="title">Herança</div>

<?php

class Pessoas {
    public $nome;
    public $idade;


    function __construct($novo, $idade) {
        $this->nome = $novo;
        $this->idade = $idade;
        echo "Pessoa criada! <br>";
    }

    function __destruct()
    {
        echo "Pessoa desalocada <br>";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }        
    
}

class Usuario extends Pessoas {
    public $insta;

    function __construct($nome, $idade, $insta)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->insta = $insta;
        echo "Usuário criado! <br>";
        
    }

    function __destruct()
    {
        echo "Usuário desalocado.";
    }

    public function apresentar()
    {
        echo "@{$this->insta}: ";
        parent::apresentar();
    }



}

    $usuario = new Usuario("Akio Andrei", 21, "AkioAndrei");
    $usuario->apresentar();
    unset($usuario);

?>

<div class="title">Visibilidade</div>

<?php

class A{
    public $publico = "Público!";
    protected $protegido = "Protegido!";
    private $privado = "Privado!";


    public function MostrarA() {
        echo "Class A) Público = {$this->publico} <br>";
        echo "Class A) Protegido = {$this->protegido} <br>";
        echo "Class A) Privado = {$this->privado} <br>";
    }

    private function naoMostrar() {
        echo "Não vou imprimir <br>";
    }

}

$a = new A();

echo $a->MostrarA();


class B extends A{

    public function MostrarB() {
        echo "Class B) Público = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        echo "Class B) Privado = {$this->privado} <br>";
    }
}

echo "<br>";

$b = new B();

$b->MostrarB();

?>

<div class="title">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Latido{
    function latir();
}

class Cachorro implements Animal,Latido {
    function respirar()
    {
        return "Estou respirando!";
    }
    
    function latir()
    {
        return "AU AU";    
    }
}

$animal1 = new Cachorro();
echo $animal1 ->respirar(), "<br>";
echo $animal1->latir(), "<br>";

echo "fim!";

?>

<div class="title">Polimorfismo</div>

<?php


abstract class Comida{
    public $peso;
}

class Arroz extends Comida{

}

class Feijao extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa{
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }
   
    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
        
}

$c1 = new Arroz();
$c1->peso = 0.5;

$p1 = new Pessoa(83.54);
$p1->comer($c1);

echo $p1->peso;
