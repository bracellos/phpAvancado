<?php
/**
 * Funções variádicas permitem que você defina funções que aceitam um número variável de argumentos. No PHP, você pode usar o operador ... (ponto de reticências) para indicar que uma função aceita um número variável de argumentos. Isso é útil quando você não sabe quantos argumentos a função receberá antecipadamente.
 */

//exemplo 1
/**
 * a função soma aceita um número variável de argumentos. Os argumentos são passados como uma lista, e a função os trata como um array chamado $numeros. Em seguida, a função itera sobre esse array e calcula a soma de todos os valores.
 */
function soma(...$numeros){
    $resultado = 0;
    foreach($numeros as $numero){
        $resultado += $numero;
    }

    return $resultado;
}

//usando
echo soma(10,20,30,40);

//EXEMPLO 2
function exemplo2($arg1, $arg2, ...$resto){
    echo $arg1."<br>";
    echo $arg2."<br>";
    foreach($resto as $r){
        echo $r."<br>";
    }
}
//usando
exemplo2("Diego", "João", "Carne", "Cerveja", "Torresmo");

//EXEMPLO 3 - parametros nomeados

function nomeados(...$params){
    foreach($params as $chave => $valor){
        echo "{$chave}: {$valor}<br>";
    }
}
$diego = [30, 33, 44];
//usando
nomeados(Diego: 38, Maria: 45, Joao:33);

//EXEMPLO 4 - MEDIA DE NOTAS
function calculaMedia($aluno, ...$notas){
    echo "Aluno: {$aluno} ";
    echo "Média: ".array_sum($notas) / count($notas);
}

calculaMedia("Diego", 10, 9.5, 6);


//EXERCICIO

function maiorMenor(...$n){
    echo "Menor: ".min($n)." Maior: ".max($n);
}

maiorMenor(4,7,9,3,56,77);