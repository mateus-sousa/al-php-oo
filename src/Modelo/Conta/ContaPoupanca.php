<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function retornaValorTarifa(): float
    {
        return 0.03;
    }
}