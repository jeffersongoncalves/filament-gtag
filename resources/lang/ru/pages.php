<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'Общие',
            'description' => 'Настройте отслеживание Google Analytics.',
        ],
        'advanced' => [
            'heading' => 'Расширенная настройка',
            'description' => 'Дополнительные параметры конфигурации gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'ID тега Google',
            'helper' => 'Ваш идентификатор потока данных Google Analytics (например, G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Включить отслеживание',
            'helper' => 'Включить или отключить скрипт Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'Анонимизировать IP',
            'helper' => 'Анонимизировать IP-адреса посетителей для соответствия GDPR.',
        ],
        'additional_config' => [
            'label' => 'Дополнительная конфигурация',
            'helper' => 'Дополнительные параметры, передаваемые в gtag("config", ...).',
            'key_label' => 'Параметр',
            'value_label' => 'Значение',
        ],
    ],
];
