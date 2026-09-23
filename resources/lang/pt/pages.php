<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'Geral',
            'description' => 'Configure o rastreamento do Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Configuração avançada',
            'description' => 'Parâmetros adicionais para a configuração do gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'ID da Google Tag',
            'helper' => 'O seu ID de medição do Google Analytics (por ex., G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Ativar rastreamento',
            'helper' => 'Ativar ou desativar o script do Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Anonimizar IP',
            'helper' => 'Anonimizar os endereços IP dos visitantes para conformidade com o RGPD.',
        ],
        'additional_config' => [
            'label' => 'Configuração adicional',
            'helper' => 'Parâmetros extra passados para gtag("config", ...).',
            'key_label' => 'Parâmetro',
            'value_label' => 'Valor',
        ],
    ],
];
