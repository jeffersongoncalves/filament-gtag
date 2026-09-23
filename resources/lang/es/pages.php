<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'General',
            'description' => 'Configura el seguimiento de Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Configuración avanzada',
            'description' => 'Parámetros adicionales para la configuración de gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'ID de Google Tag',
            'helper' => 'Tu ID de medición de Google Analytics (p. ej., G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Activar seguimiento',
            'helper' => 'Activa o desactiva el script de Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Anonimizar IP',
            'helper' => 'Anonimiza las direcciones IP de los visitantes para cumplir con el RGPD.',
        ],
        'additional_config' => [
            'label' => 'Configuración adicional',
            'helper' => 'Parámetros extra pasados a gtag("config", ...).',
            'key_label' => 'Parámetro',
            'value_label' => 'Valor',
        ],
    ],
];
