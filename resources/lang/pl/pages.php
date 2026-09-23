<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'Ogólne',
            'description' => 'Skonfiguruj śledzenie Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Konfiguracja zaawansowana',
            'description' => 'Dodatkowe parametry konfiguracji gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'ID tagu Google',
            'helper' => 'Identyfikator pomiaru Google Analytics (np. G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Włącz śledzenie',
            'helper' => 'Włącz lub wyłącz skrypt Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Anonimizuj IP',
            'helper' => 'Anonimizuj adresy IP odwiedzających w celu zgodności z RODO.',
        ],
        'additional_config' => [
            'label' => 'Dodatkowa konfiguracja',
            'helper' => 'Dodatkowe parametry przekazywane do gtag("config", ...).',
            'key_label' => 'Parametr',
            'value_label' => 'Wartość',
        ],
    ],
];
