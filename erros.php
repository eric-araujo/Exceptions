<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

set_error_handler(function ($numeroErro, $textoErro, $arquivoErro, $linhaErro) {
    switch ($numeroErro) {
        case E_WARNING:
            echo "AVISO: Cuidado" . PHP_EOL;
            break;
        case E_NOTICE:
            echo "MELHOR TRATAR ISSO" . PHP_EOL;
            break;
        case E_ERROR:
            echo "GRAVE: ESTE ERRO PRECISA SER TRATADO" . PHP_EOL;
            break;
        default:
            echo "PROBLEMA INESPERADO" . PHP_EOL;
    }

    return true;
});

echo $variavel;
echo $array[42];

echo CONSTANTE;
