<?php
    /******************** Escalares ********************/

    //string
    $nome = "Leonardo Melo";
    echo "<h1> Leonardo Melo </h1>";
    var_dump($nome);

    echo "<br> <br>";

    if(is_string($nome)):
        echo "É uma string";
    else:
        echo "Não é uma string";
    endif;

    echo "<hr>";


    //int
    $idade = 19;

    var_dump($idade);

    if(is_int($idade)):
        echo "<br>É inteiro";
    else:
        echo "<br>Não é inteiro";
    endif;

    echo "<hr>";

    //Flolat
    $altura = 1.67;
    var_dump($altura);

    if(is_int($altura)):
        echo "<br>É inteiro";
    else:
        echo "<br>Não é inteiro";
    endif;

    echo "<hr>";

    //boolean
    $admin = true;
    var_dump($admin);

    if(is_bool($admin)):
        echo "<br>É true";
    else:
        echo "<br>Não é false";
    endif;
     
    echo "<hr>";
    
    /******************** Compostos ********************/
    //Array
    $carros = array("Gol", "Uno", "Camaro",12, 20.6,true);
    var_dump($carros);

    echo "<hr>";

    //Object

    class Cliente
    {
        public $nome;
        public function atribuirNome($nome)
        {
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();

    $cliente->atribuirNome("Leonardo Melo");

    var_dump($cliente);

    if(is_object($cliente)):
        echo "<br>É um objeto";
    else:
        echo "<br>Não é um objeto";
    endif;

    echo "<hr>";

    /******************** Especiais ********************/

    //NULL
    $cidade = NULL;
    var_dump($cidade);

    echo "<hr>";
