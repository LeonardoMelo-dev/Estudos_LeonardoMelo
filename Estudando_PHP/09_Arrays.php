<?php
 
// Arrays
$carros = array("BMW", "Veloster", "Hilux");
print_r($carros);

echo "<br>Carro 0 = ".$carros[0];
echo "<br>Carro 1 = ".$carros[1];
echo "<br>Carro 2 = ".$carros[2];
echo "<hr>"; 

//=============================================================

// Com for (ERRADO sem FOREACH)

for($i=0; $i < 3; $i++)
{
    echo "<br>Carro ".$i." = ".$carros[$i];
}

echo "<hr>"; 

//=============================================================

// Com for (CORRETO sem FOREACH)
echo "<hr>"; 
for($i=0; $i < count($carros); $i++)
{
    echo "<br>Carro ".$i." = ".$carros[$i];
}

echo "<hr>"; 

//=============================================================

// Trocando posição do array
$carros = array(1=>"BMW",2=>"Veloster",3=>"Hilux");

// Adicionando Valores a lista
$carros[] = "Amarok";
$carros[10] = "Camaro";
$carros[5] = "UP";

echo "<br>";
print_r($carros);

echo "<hr>";

//=============================================================

//Outra forma de criar arrays
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[7] = "Suzuki";
$motos[4] = "xly";
$motos[5] = "nftgg";

print_r($motos);

// Com for (CORRETO sem FOREACH)
echo "<hr>"; 
for($i=0; $i < count($motos); $i++)
{
    echo "<br>Motos ".$i." = ".$motos[$i];
}

echo "<hr>";

//=============================================================

//Outra forma de criar arrays
$clientes = ["Leonardo", "Marcelo", "Thiago", "Katarina"];
echo "<br>";
print_r($clientes); 

echo "<hr>"; 
for($i=0; $i < count($clientes); $i++)
{
    echo "<br>Clientes ".$i." = ".$clientes[$i];
}

echo "<hr>";

//=============================================================


echo count($carros);
echo "<br>";
echo count($motos);
echo "<br>";
echo count($clientes);

echo "<hr>";

//================================================= FOREACH ===================================

foreach($carros as $valor)
{
    echo $valor."<br>";
}

//================================================= MULTIDIMENCIONAIS =================================================

$times = array("cariocas");