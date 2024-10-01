<?php

$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$faturamento_total = array_sum($faturamento);

$percentuais = [];
foreach ($faturamento as $estado => $valor) {
    $percentuais[$estado] = ($valor * 100) / $faturamento_total;
}

echo "Percentuais do faturamento de cada estado:<br>";

foreach ($percentuais as $estado => $percentual) {
    echo "$estado: " . number_format($percentual, 2) . "%<br>";
}
