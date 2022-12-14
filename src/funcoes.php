<?php

namespace SRC;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Funcoes
{
    /*
    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
	Exemplos para teste:
	Ano 1905 = século 20
	Ano 1700 = século 17
     */
    public function SeculoAno(int $ano): int {
        $sec = ($ano / 100) + (($ano % 100 ? 1 : $ano) % 10 ? 1 : 0);
        return "o Século é:" . round($sec);
    }
	
	/*
    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido
    Exemplo para teste:
    Numero = 10 resposta = 7
    Número = 29 resposta = 23
    */
    public function PrimoAnterior(int $numero): int {
        $divisores = 0;
        $listando_primos = array();
        $primo_anterior = 0;

        for ($i = 0; $i < $num; $i++) {
            for ($x = $i; $x > 0; $x--) {
                if ($i % $x == 0) {
                    $divisores += 1;
                }
            }

            if ($divisores == 2) {
                array_push($listando_primos, $i);
            }

            $divisores = 0;
        }

        $primo_anterior = max($listando_primos);
        return "Número primo anterior ao $num é = " . $primo_anterior;
    }

    /*
    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.
    Exemplo para teste:
	Array multidimensional = array (array(25,22,18),array(10,15,13),array(24,5,2),array(80,17,15));
	resposta = 25
    */
    public function SegundoMaior(array $arr): int {
        $arr = array(
            array(25, 22, 218),
            array(10, 15, 113, 96),
            array(24, 15, 2, 79),
            array(80, 17, 15)
        );

        $maior = [];

        foreach ($arr as &$valor) {
            array_push($maior, max($valor));
        }
        rsort($maior);

        return "O segundo maior é:" . $maior[1];
    }
}
