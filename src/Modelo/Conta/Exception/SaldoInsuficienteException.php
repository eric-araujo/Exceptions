<?php

namespace Alura\Banco\Modelo\Conta\Exception;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $valorTarifa, float $saldoAtual)
    {
        $valorSaqueFormatado = $this->formatarValor($valorSaque);
        $valorTarifaFormatado = $this->formatarValor($valorTarifa);
        $saldoAtualFormatado = $this->formatarValor($saldoAtual);

        $mensagem = "Você tentou sacar R$ {$valorSaqueFormatado} (valor de taxa incluso R$ {$valorTarifaFormatado}), mas o saldo disponível é R$ {$saldoAtualFormatado}";

        parent::__construct($mensagem);
    }

    private function formatarValor(float $valor): string
    {
        return number_format($valor, 2, ',', '.');
    }
}
