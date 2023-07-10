<?php
/*efinindo namespaces, podemos facilmente ter duas classes
 com o mesmo nome em namespaces diferentes. Uma classe chamada Conta,
  por exemplo, pode ter um significado diferente no módulo de login e
  no módulo de contas. Utilizando um namespace raiz para a nossa aplicação,
   evitamos ainda conflitos com pacotes externos que viermos a utilizar.
*/
namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedade;
    
    protected $nome;
    private $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    final protected function validaNome(string $nome): void
    {
        if(strlen($nome) < 3){
            echo 'Nome do Titular inválido';
            exit();
        }
    }
}