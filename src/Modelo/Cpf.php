<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    private $numeroCpf;

    public function _construct(string $cpf)
    {
        $this->numeroCpf = $cpf;
    }

    public function recuperaCpf()
    {
        return $this->numeroCpf;
    }
}