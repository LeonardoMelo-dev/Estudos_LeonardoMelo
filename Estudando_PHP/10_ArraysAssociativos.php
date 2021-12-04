<?php
$pessoa = array("nome"=>"Leonardo Melo", "idade"=>19, "altura"=>1.67);
$pessoa["cidade"] = "Hortolândia";

foreach($pessoa as $indice => $valor)
{
    echo $indice.": ".$valor."<br>";
}