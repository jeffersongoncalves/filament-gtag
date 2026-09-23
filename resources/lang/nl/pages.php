<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Instellingen',
    'title' => 'Google Analytics-instellingen',
    'sections' => [
        'general' => [
            'heading' => 'Algemeen',
            'description' => 'Configureer je Google Analytics-tracking.',
        ],
        'advanced' => [
            'heading' => 'Geavanceerde configuratie',
            'description' => 'Extra parameters voor de gtag-configuratie.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google-tag-ID',
            'helper' => 'Je Google Analytics-metings-ID (bijv. G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Tracking inschakelen',
            'helper' => 'Het Google Analytics-script in- of uitschakelen.',
        ],
        'anonymize_ip' => [
            'label' => 'IP anonimiseren',
            'helper' => 'IP-adressen van bezoekers anonimiseren voor AVG-naleving.',
        ],
        'additional_config' => [
            'label' => 'Extra configuratie',
            'helper' => 'Extra parameters die worden doorgegeven aan gtag("config", ...).',
            'key_label' => 'Parameter',
            'value_label' => 'Waarde',
        ],
    ],
];
