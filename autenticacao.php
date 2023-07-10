<?php

require 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\Autenticador;

$diretor = new Diretor(
    'Mateus',
    new Cpf('052.882.141-58'),   
    '1000');


$autenticador = new Autenticador();
$autenticador->tentaLogin($diretor, '12314');
