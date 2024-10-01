<?php
$jsonData = file_get_contents('faturamento.json');
$faturamentoDiario = json_decode($jsonData, true);

$menorValor =  PHP_FLOAT_MAX;
$maiorValor = PHP_FLOAT_MIN;
$somaFaturamento = 0;
$diasComFaturamento = 0;

foreach ($faturamentoDiario as $dia) {
    $valor = $dia['valor'];

    if ($valor > 0) {

        if ($valor < $menorValor) {
            $menorValor = $valor;
        }
        if ($valor > $maiorValor) {
            $maiorValor = $valor;
        }

        $somaFaturamento += $valor;
        $diasComFaturamento++;
    }
}

$mediaMensal = $somaFaturamento / $diasComFaturamento;

$diasAcimaDaMedia = 0;
foreach ($faturamentoDiario as $dia) {
    if ($dia['valor'] > $mediaMensal) {
        $diasAcimaDaMedia++;
    }
}

echo "Menor valor de faturamento: R$ " . number_format($menorValor, 2, ',', '.') . "<br>";
echo "Maior valor de faturamento: R$ " . number_format($maiorValor, 2, ',', '.') . "<br>";
echo "Número de dias com faturamento acima da média: " . $diasAcimaDaMedia . "<br>";
