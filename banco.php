<?php
require 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;

$endereco = new Endereco('Planaltina', 'Estancia', 'Mod H', '01');

$primeiraConta = new ContaCorrente(new Titular('Mateus',new Cpf('052.882.141-58'), $endereco));

$segundaConta = new ContaPoupanca(new Titular('Jhon Snow', new Cpf('123.456.789-01'), $endereco));

$primeiraConta->deposita(2500);

print('Mateus tem '. $primeiraConta->recuperaSaldo());
print('<br>');
print('Jhon tem '. $segundaConta->recuperaSaldo());
print('<br>');
print('<br>');
$primeiraConta->transfere(1000, $segundaConta);

print('Mateus tem '. $primeiraConta->recuperaSaldo());
print('<br>');
print('Jhon tem '. $segundaConta->recuperaSaldo());
