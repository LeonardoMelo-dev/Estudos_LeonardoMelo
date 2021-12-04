<?php
$nome1 = "Leonardo Melo";


function exibeNome1($nome1)
{
    echo $nome1;
}

exibeNome1($nome1);


echo "<hr>";

//=============================================================

$nome2 = "Leonardo Melo";


function exibeNome2()
{
    global $nome2;
    echo $nome2;
}

exibeNome2($nome2);

echo "<hr>";

//=============================================================


function exibeCidade()
{
    global $cidade;
    $cidade = "Hortolândia";
}

exibeCidade();

echo $cidade;

echo "<hr>";

//=============================================================

$a = 1;
$b = 3;
$c = 7;

function soma()
{
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
