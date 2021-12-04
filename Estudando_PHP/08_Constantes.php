<?php
// Constantes

define("NOME", "Leonardo Melo");

define("IDADE", 19);

define("ALTURA", 1.67);

var_dump(NOME);

echo "<br>Nome: ".NOME."<br>Idade: ".IDADE."<br>Altura: ".ALTURA;

echo "<hr>";

//=============================================================

define("CORES", ["azul", "amarelo", "vermelho"]);

echo "<hr>";

echo CORES[1]."<br>";

var_dump(CORES);

echo "<hr>";

//=============================================================

function exibeNome()
{
    echo NOME;
}

exibeNome();


echo "<hr>";

echo "<h1>Salve Léo</h1>";
