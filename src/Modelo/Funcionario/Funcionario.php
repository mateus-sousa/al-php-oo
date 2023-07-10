<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{   
    protected $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);      
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function aplicaAumento($valor)
    {
        if($valor < 0){
            echo 'Impossivel dar um aumento negativo';
            return;
        }

        $this->salario += $valor;
    }

    abstract public function calculaBonificacao(): float;
}