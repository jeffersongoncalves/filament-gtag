<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'Загальні',
            'description' => 'Налаштуйте відстеження Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Розширене налаштування',
            'description' => 'Додаткові параметри конфігурації gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'ID тегу Google',
            'helper' => 'Ваш ідентифікатор вимірювання Google Analytics (наприклад, G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Увімкнути відстеження',
            'helper' => 'Увімкнути або вимкнути скрипт Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Анонімізувати IP',
            'helper' => 'Анонімізувати IP-адреси відвідувачів для відповідності GDPR.',
        ],
        'additional_config' => [
            'label' => 'Додаткова конфігурація',
            'helper' => 'Додаткові параметри, що передаються в gtag("config", ...).',
            'key_label' => 'Параметр',
            'value_label' => 'Значення',
        ],
    ],
];
