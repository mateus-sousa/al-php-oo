<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel(): void
    {
        $this->aplicaAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao()
    {
        return 500;
    }
}