<?php

namespace Alura\Banco\Modelo;

Interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}