<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function retornaValorTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valor, Conta $conta): void
    {
        if($valor > $this->saldo){
            echo 'Impossivel transferir esse valor.';
            return;
        }

        $this->saca($valor);
        $conta->deposita($valor);
    }
}