<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Settings',
    'title' => 'Google Analytics Settings',

    'sections' => [
        'general' => [
            'heading' => 'General',
            'description' => 'Configure your Google Analytics tracking.',
        ],
        'advanced' => [
            'heading' => 'Advanced Configuration',
            'description' => 'Additional parameters for gtag configuration.',
        ],
    ],

    'fields' => [
        'gtag_id' => [
            'label' => 'Google Tag ID',
            'helper' => 'Your Google Analytics measurement ID (e.g., G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Enable Tracking',
            'helper' => 'Enable or disable the Google Analytics script.',
        ],
        'anonymize_ip' => [
            'label' => 'Anonymize IP',
            'helper' => 'Anonymize visitor IP addresses for GDPR compliance.',
        ],
        'additional_config' => [
            'label' => 'Additional Config',
            'helper' => 'Extra parameters passed to gtag("config", ...).',
            'key_label' => 'Parameter',
            'value_label' => 'Value',
        ],
    ],
];
