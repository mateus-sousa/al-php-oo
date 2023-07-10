<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get($nomeAtributo)
    {
        $metodo = "recupera" . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}