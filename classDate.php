<?php

$agora = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
// echo $agora->format('d/m/Y H:i:s').'<br>';

//exibir o dia de ontem
$ontem = new DateTime('-1 week');
// echo $ontem->format('d/m/Y');

/* echo "<pre>";
var_dump($agora);
echo "</pre>"; */

//adicionando um intervalo
$agora->add(new DateInterval('P30D'));
// echo $agora->format('d/m/Y');

//diferença entre duas datas
$dataInicio = new DateTime();
$dataFinal = new DateTime('2024-01-28');

$resultado = $dataInicio->diff($dataFinal);

// % indica um placeholder - da pra usar todos os comuns
/**
 * ou modificadores específicos.
 * %a: Número total de dias, independentemente de outros componentes no intervalo.
 * %R: Exibe o sinal do intervalo (+ ou -).
 * %y: Número de anos (ignorando meses e dias).
 * %M: Número de meses (ignorando anos e dias).
 * %D: Número de dias (ignorando anos e meses).
*/
// echo $resultado->format('%m meses %a dias');

//exibir data por extenso
$hoje = new DateTime();
//FULL SERVE PARA EXIBIR A DATA POR EXTENSO
//NONE PARA NÃO EXIBIR A HORA
$formato = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, new DateTimeZone('America/Sao_Paulo'));
// echo $formato->format($hoje);

//gerador de parcelas
$parcela = new DateTime();

for($parc = 1; $parc <= 36; $parc++){
    $parcela->add(new DateInterval('P30D'));
    echo "Parcela: {$parc} Vencimento: {$parcela->format('d/m/Y')}<br>";
}
