<?php

/**
 * @throws DivisionByZeroError
 * @throws RuntimeException
 */
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError  $erro) {
        echo $erro->getMessage() . PHP_EOL;
        echo $erro->getLine() . PHP_EOL;
        echo $erro->getTraceAsString() . PHP_EOL;

        throw new RuntimeException('Erro tratado');
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new RuntimeException('', 0, new RuntimeException());
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
