<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
    use AcessoPropriedade;
    
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;  
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }

    public function __toString()
    {
        return "{$this->recuperaBairro()}, {$this->recuperaRua()}, {$this->recuperaNumero()}, {$this->recuperaCidade()}";
    }  
}