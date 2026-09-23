<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Einstellungen',
    'title' => 'Google Analytics-Einstellungen',
    'sections' => [
        'general' => [
            'heading' => 'Allgemein',
            'description' => 'Konfigurieren Sie Ihr Google Analytics-Tracking.',
        ],
        'advanced' => [
            'heading' => 'Erweiterte Konfiguration',
            'description' => 'Zusätzliche Parameter für die gtag-Konfiguration.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google-Tag-ID',
            'helper' => 'Ihre Google Analytics-Mess-ID (z. B. G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Tracking aktivieren',
            'helper' => 'Das Google Analytics-Skript aktivieren oder deaktivieren.',
        ],
        'anonymize_ip' => [
            'label' => 'IP anonymisieren',
            'helper' => 'IP-Adressen der Besucher zur DSGVO-Konformität anonymisieren.',
        ],
        'additional_config' => [
            'label' => 'Zusätzliche Konfiguration',
            'helper' => 'Zusätzliche Parameter, die an gtag("config", ...) übergeben werden.',
            'key_label' => 'Parameter',
            'value_label' => 'Wert',
        ],
    ],
];
