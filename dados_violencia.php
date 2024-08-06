<?php
// Dados fictícios de violência por estado com taxas do ano anterior
$dados_violencia = [
    'Norte' => [
        'Acre' => ['violencia' => 26.7, 'violencia_ano_anterior' => 23],
        'Amazonas' => ['violencia' => 43.5, 'violencia_ano_anterior' => 44.6],
        'Pará' => ['violencia' => 33.6, 'violencia_ano_anterior' => 33.6],
        'Rondônia' => ['violencia' => 33.7, 'violencia_ano_anterior' => 30.6],
        'Roraima' => ['violencia' => 41.8, 'violencia_ano_anterior' => 48.3],
        'Tocantins' => ['violencia' => 30.1, 'violencia_ano_anterior' => 29.7],
        'Amapá' => ['violencia' => 41.8, 'violencia_ano_anterior' => 54.9],
    ],
    'Nordeste' => [
        'Alagoas' => ['violencia' => 34.9, 'violencia_ano_anterior' => 33.6],
        'Bahia' => ['violencia' => 46.8, 'violencia_ano_anterior' => 50.3],
        'Ceará' => ['violencia' => 39, 'violencia_ano_anterior' => 40.7],
        'Maranhão' => ['violencia' => 27.6, 'violencia_ano_anterior' => 28.5],
        'Paraíba' => ['violencia' => 27.4, 'violencia_ano_anterior' => 28.7],
        'Pernambuco' => ['violencia' => 37.7, 'violencia_ano_anterior' => 38.5],
        'Piauí' => ['violencia' => 25.2, 'violencia_ano_anterior' => 24.7],
        'Rio Grande do Norte' => ['violencia' => 35.5, 'violencia_ano_anterior' => 35.9],
        'Sergipe' => ['violencia' => 34.3, 'violencia_ano_anterior' => 35.5],
    ],
    'Centro-Oeste' => [
        'Distrito Federal' => ['violencia' => 11.7, 'violencia_ano_anterior' => 13.7],
        'Goiás' => ['violencia' => 24.4, 'violencia_ano_anterior' => 26.3],
        'Mato Grosso' => ['violencia' => 32.1, 'violencia_ano_anterior' => 27.2],
        'Mato Grosso do Sul' => ['violencia' => 22.9, 'violencia_ano_anterior' => 22.7],
    ],
    'Sudeste' => [
        'Espírito Santo' => ['violencia' => 32.6, 'violencia_ano_anterior' => 32.8],
        'Minas Gerais' => ['violencia' => 14.6, 'violencia_ano_anterior' => 14.4],
        'Rio de Janeiro' => ['violencia' => 26.2, 'violencia_ano_anterior' => 28.4],
        'São Paulo' => ['violencia' => 12, 'violencia_ano_anterior' => 11.7],
    ],
    'Sul' => [
        'Paraná' => ['violencia' => 23.6, 'violencia_ano_anterior' => 21.9],
        'Rio Grande do Sul' => ['violencia' => 17.9, 'violencia_ano_anterior' => 17.3],
        'Santa Catarina' => ['violencia' => 9.7, 'violencia_ano_anterior' => 10.4],
    ],
];

// Converte dados para formato JSON
header('Content-Type: application/json');
echo json_encode($dados_violencia);
?>
