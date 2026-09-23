<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'Général',
            'description' => 'Configurez votre suivi Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Configuration avancée',
            'description' => 'Paramètres supplémentaires pour la configuration de gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'ID de balise Google',
            'helper' => 'Votre ID de mesure Google Analytics (par ex. G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Activer le suivi',
            'helper' => 'Activer ou désactiver le script Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Anonymiser l\'IP',
            'helper' => 'Anonymiser les adresses IP des visiteurs pour la conformité au RGPD.',
        ],
        'additional_config' => [
            'label' => 'Configuration supplémentaire',
            'helper' => 'Paramètres supplémentaires transmis à gtag("config", ...).',
            'key_label' => 'Paramètre',
            'value_label' => 'Valeur',
        ],
    ],
];
