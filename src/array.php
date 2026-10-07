<?php


$frutas = ["banana", "Maracujua", "uva", "maçã"];

foreach($frutas as $i => $fruta) {
    echo "$i - " . strtoupper($fruta) . "<br> <br>";
}

$produto = ["nome" => "Camiseta", "preco" => 49.90];
echo $produto["nome"];
$frutas[] = "Manga";

?>