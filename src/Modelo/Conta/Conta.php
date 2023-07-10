<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

abstract class Conta 
{
    private $titular;
    protected $saldo;
    //Uma propriedade estatica é uma propriedade direta da nossa classe e não de uma instancia dela.
    private static $numeroContas;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function saca(float $valor): void
    {
        $tarifaSaque = $valor * $this->retornaValorTarifa();
        $valorSaque = $valor + $tarifaSaque;
        //Por boas praticas se evita usar else sem condição então,
        //se usa return; para parar a execução do codigo. 
        if($this->saldo < $valorSaque){
            echo 'Saldo indisponível para saque.';
            return;
        }

        $this->saldo -= $valorSaque;        
    }

    public function deposita(float $valor): void
    {
        if($valor < 0){
            echo 'Valor não pode ser negativo.';
            return;
        }

        $this->saldo += $valor;
    }    

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }  
    
    public static function recuperaNumeroDeContas()
    {
        return self::$numeroContas;
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    abstract protected function retornaValorTarifa():float;
}