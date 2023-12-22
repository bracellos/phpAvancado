<?php
/**
 * Em PHP, funções anônimas são conhecidas como "funções anônimas" ou "closures". Uma função anônima é uma função sem um nome associado. Closures são particularmente úteis quando você precisa passar uma função como argumento para outra função ou quando você deseja criar funções de callback de forma concisa.
 * A palavra-chave use é utilizada para importar variáveis externas para a função anônima.
 */

/**
 * EXEMPLO 1
 */
$mensagem = "Olá, ";

$funcaoAnonima = function($nome) use ($mensagem){
    echo $mensagem.$nome;
};

//usando a função
$funcaoAnonima("Diego");

/**
 * EXEMPLO 2
 * este exemplo, a função criarContador retorna uma closure que mantém o estado interno da variável $contador. Cada vez que a closure é chamada, o contador é incrementado.
 */
function criarContador(){
    $contador = 0;
    //closure
    $funcaoContadora = function() use (&$contador){
        $contador++;
        echo "Contagem: ".$contador."<br>";
    };

    return $funcaoContadora;
}

//usando
$contadora = criarContador();

$contadora();
$contadora();

/**
 * EXEMPLO 3
 * 
 */
$numeros = [1,2,3,4,5,6,7,8,9,10];

$numerosPares = array_filter($numeros, function($numero){
    return $numero % 2 == 0;
});

$numerosDobrados = array_map(function($numero){
    return $numero * 2;
}, $numerosPares);

echo "<pre>";
print_r($numerosDobrados);
echo "</pre>";

//EXEMPLO 4
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(44, 66);
echo "<br>";
//CALCULA MEDIA


$calculaMedia = function($n){
    return array_sum($n) / count($n);
};

$notasDiego = [8.5, 9, 6.5];
$notasJoao = [8, 5.5, 10, 7];

echo "Diego obteve a média: {$calculaMedia($notasDiego)}<br>";

echo "João obteve a média: {$calculaMedia($notasJoao)}<br>";