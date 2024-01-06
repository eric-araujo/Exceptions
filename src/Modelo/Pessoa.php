<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Exception\TamanhoMinimoNomePessoaException;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected $nome;
    private $cpf;

    private const TAMANHO_MINIMO_NOME_PESSOA = 5;

    public function __construct(string $nome, CPF $cpf)
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
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < self::TAMANHO_MINIMO_NOME_PESSOA) {
            throw new TamanhoMinimoNomePessoaException(self::TAMANHO_MINIMO_NOME_PESSOA);
        }
    }
}
