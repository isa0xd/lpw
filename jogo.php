<?php

require_once("modelo/Pokemon.php");

//criar objt

$pokemon1 = new Pokemon("Sceptille");
$pokemon1->tipo = "Grama";
$pokemon1->hp = 70;
$pokemon1->link = ("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/254.png");

$pokemon2 = new Pokemon("Jigglypuff");
$pokemon2->tipo = "Fada";
$pokemon2->hp = 115;
$pokemon2->link = ("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/039.png");

$pokemon3 = new Pokemon("Gengar");
$pokemon3->tipo = "Fantasma";
$pokemon3->hp = 60;
$pokemon3->link = ("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/094.png");

$pokemon4 = new Pokemon("Teddiursa");
$pokemon4->tipo = "Normal";
$pokemon4->hp = 60;
$pokemon4->link = ("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/216.png");

$pokemons = array($pokemon1, $pokemon2, $pokemon3, $pokemon4);

//sortear um dos obj pra ser o correto

$sorteado = array_rand($pokemons);

$palpite = $_GET['palpite'];

if ($sorteado == $palpite) {
    $pokemon = $pokemons [$sorteado];
    echo "Parabéns você acertou! O pokémon sorteado foi o " . $palpite . " <img src='" . $pokemon->getLink() . " '>";
} else {
    echo "Você errou! O pokémon correto era o " . $palpite;
}

//receber palpite ($_GET) e mostrar se acertou ou errou