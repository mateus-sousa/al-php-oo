<?php

require 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Gerente, Desenvolvedor, Diretor};
use Alura\Banco\Service\ControladorBonificacoes;

$umFuncionario = new Gerente(
    'Mateus',
    new Cpf('052.882.141-58'),   
    '1000');

$outroFuncionario = new Diretor(
    'Thiago',
    new Cpf('123.456.789-52'),   
    '1000');

    $controladorBonificacoes = new ControladorBonificacoes();
    $controladorBonificacoes->adicionaBonificacaoDe($umFuncionario);
    $controladorBonificacoes->adicionaBonificacaoDe($outroFuncionario);
print_r($controladorBonificacoes->recuperaTotalBonificacoes());

