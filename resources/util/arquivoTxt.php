<?php

$name = '../index.txt';
$text = 'Olá. Eu sou Goku';
$file = fopen($name, 'a');

fwrite($file, $text);
fclose($file);

function ler_arquivo() {
    $ponteiro = fopen("../index.txt", "r");

    while (!feof($ponteiro)) {
        $linha = fgets($ponteiro, 4096);
        echo $linha . "<br>";
    }
    fclose ($ponteiro);
}
