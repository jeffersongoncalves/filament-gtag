<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Google Analytics सेटिंग्स',
    'sections' => [
        'general' => [
            'heading' => 'सामान्य',
            'description' => 'अपनी Google Analytics ट्रैकिंग कॉन्फ़िगर करें।',
        ],
        'advanced' => [
            'heading' => 'उन्नत कॉन्फ़िगरेशन',
            'description' => 'gtag कॉन्फ़िगरेशन के लिए अतिरिक्त पैरामीटर।',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google Tag ID',
            'helper' => 'आपकी Google Analytics मेज़रमेंट ID (जैसे, G-XXXXXXXXXX)।',
        ],
        'enabled' => [
            'label' => 'ट्रैकिंग सक्षम करें',
            'helper' => 'Google Analytics स्क्रिप्ट को सक्षम या अक्षम करें।',
        ],
        'anonymize_ip' => [
            'label' => 'IP गुमनाम करें',
            'helper' => 'GDPR अनुपालन के लिए आगंतुकों के IP पते गुमनाम करें।',
        ],
        'additional_config' => [
            'label' => 'अतिरिक्त कॉन्फ़िगरेशन',
            'helper' => 'gtag("config", ...) को भेजे जाने वाले अतिरिक्त पैरामीटर।',
            'key_label' => 'पैरामीटर',
            'value_label' => 'मान',
        ],
    ],
];
