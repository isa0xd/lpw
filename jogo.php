<?php

require_once("modelo/Pokemon.php");

//criar objt

$pokemon1 = new Pokemon("Sceptille");
$pokemon1->setTipo("Grama");
$pokemon1->setHp(70);
$pokemon1->setLink("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/254.png");

$pokemon2 = new Pokemon("Jigglypuff");
$pokemon2->setTipo("Fada");
$pokemon2->setHp(115);
$pokemon2->setLink("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/039.png");

$pokemon3 = new Pokemon("Gengar");
$pokemon3->setTipo("Fantasma");
$pokemon3->setHp(60);
$pokemon3->setLink("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/094.png");

$pokemon4 = new Pokemon("Teddiursa");
$pokemon4->setTipo("Normal");
$pokemon4->setHp(60);
$pokemon4->setLink("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/216.png");

$pokemons = array($pokemon1, $pokemon2, $pokemon3, $pokemon4);

//sortear um dos obj pra ser o correto

$sorteado = array_rand($pokemons);


if (isset($_GET['palpite'])) {
    $palpite = $_GET['palpite'];
    if ($sorteado == $palpite) {
        $pokemon = $pokemons [$sorteado];
        echo "Parabéns você acertou! O pokémon sorteado foi o " . $pokemon->getNome() . " <img src='" . $pokemon->getLink() . " '>";
        echo "<br> Nome: " . $pokemon->getNome();
        echo "<br> HP: " . $pokemon->getHp();
        echo "<br> Tipo: " . $pokemon->getTipo();
    } else {
        echo "Você errou! O pokémon correto era o " . $sorteado . "<br>";
        echo '<a href="index.php">Página inicial</a>';
    }
} else {
    echo "Informe um parâmetro!";
}



//receber palpite ($_GET) e mostrar se acertou ou errou
