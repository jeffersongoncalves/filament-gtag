<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações do Google Analytics',

    'sections' => [
        'general' => [
            'heading' => 'Geral',
            'description' => 'Configure o rastreamento do Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Configuração Avançada',
            'description' => 'Parâmetros adicionais para configuração do gtag.',
        ],
    ],

    'fields' => [
        'gtag_id' => [
            'label' => 'ID do Google Tag',
            'helper' => 'Seu ID de medição do Google Analytics (ex.: G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Ativar Rastreamento',
            'helper' => 'Ativa ou desativa o script do Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Anonimizar IP',
            'helper' => 'Anonimiza os endereços IP dos visitantes para conformidade com LGPD/GDPR.',
        ],
        'additional_config' => [
            'label' => 'Configuração Adicional',
            'helper' => 'Parâmetros extras enviados para gtag("config", ...).',
            'key_label' => 'Parâmetro',
            'value_label' => 'Valor',
        ],
    ],
];
