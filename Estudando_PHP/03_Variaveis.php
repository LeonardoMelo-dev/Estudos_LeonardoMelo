<?php
// Meus dados
$nome = "Leonardo Melo";
$idade = 19;
$altura = 1.67;

echo "Nome: $nome <br> idade: $idade <br> altura: $altura";

// Alterando meus dados
$newName = "Mateus Felipe";

$nome = $newName;
$idade = $idade + 5;

echo "<hr>";

echo "<br> Novo nome: $nome <br> Nova idade $idade";

