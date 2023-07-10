<?php

require "autoload.php";

use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Planaltina', 'Estancia', 'Rua H', '29');

echo $endereco;

echo '<br>';

echo $endereco->rua;

echo '<br>';

echo $endereco->bairro;

echo '<br>';

echo $endereco->cidade;

echo '<br>';

echo $endereco->numero;
