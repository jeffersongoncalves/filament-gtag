<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'Generale',
            'description' => 'Configura il tracciamento di Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Configurazione avanzata',
            'description' => 'Parametri aggiuntivi per la configurazione di gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'ID tag Google',
            'helper' => 'Il tuo ID di misurazione di Google Analytics (ad es. G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Abilita tracciamento',
            'helper' => 'Abilita o disabilita lo script di Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Anonimizza IP',
            'helper' => 'Anonimizza gli indirizzi IP dei visitatori per la conformità al GDPR.',
        ],
        'additional_config' => [
            'label' => 'Configurazione aggiuntiva',
            'helper' => 'Parametri extra passati a gtag("config", ...).',
            'key_label' => 'Parametro',
            'value_label' => 'Valore',
        ],
    ],
];
