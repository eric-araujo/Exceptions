<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Conta\Exception\SaldoInsuficienteException;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Eric Lima',
        new Endereco('Mongaguá', 'Ver', 'Rua lá', '3745')
    )
);
$conta->deposita(500);

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo $exception->getMessage();
}

echo $conta->recuperaSaldo();
