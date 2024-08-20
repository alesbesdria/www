<!-- Ecrire une fonction qui génère des phrases aléatoires -->
<?php
function genWords()
{
    $words = '';
    $char = ['a', 'z', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'q', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'w', 'x', 'c', 'v', 'b', 'n'];
    for ($i = 0; $i < 6; $i++) {
        $words .= $char[rand(0, count($char) - 1)];
    }
    return $words;
}

// echo genWords();

function genSent()
{
    $phrase = '';
    for ($i = 0; $i < 6; $i++) {
        $phrase .= genWords() . ' ';
    }
    return $phrase;
}

echo genSent();
?>