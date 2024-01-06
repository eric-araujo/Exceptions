<?php

namespace Alura\Banco\Modelo\Exception;

class TamanhoMinimoNomePessoaException extends \DomainException
{
    public function __construct(int $tamanhoMinimoNomePessoa)
    {
        $mensagem = "O nome precisar ter no mínimo {$tamanhoMinimoNomePessoa} caracteres";
        parent::__construct($mensagem);
    }
}
