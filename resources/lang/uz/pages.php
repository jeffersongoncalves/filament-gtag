<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Google Analytics sozlamalari',
    'sections' => [
        'general' => [
            'heading' => 'Umumiy',
            'description' => 'Google Analytics kuzatuvini sozlang.',
        ],
        'advanced' => [
            'heading' => 'Kengaytirilgan konfiguratsiya',
            'description' => 'gtag konfiguratsiyasi uchun qoʻshimcha parametrlar.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google Tag ID',
            'helper' => 'Google Analytics oʻlchov ID raqamingiz (masalan, G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'Kuzatuvni yoqish',
            'helper' => 'Google Analytics skriptini yoqish yoki oʻchirish.',
        ],
        'anonymize_ip' => [
            'label' => 'IPʼni anonimlashtirish',
            'helper' => 'GDPR talablariga muvofiqlik uchun tashrif buyuruvchilarning IP manzillarini anonimlashtirish.',
        ],
        'additional_config' => [
            'label' => 'Qoʻshimcha konfiguratsiya',
            'helper' => 'gtag("config", ...) ga uzatiladigan qoʻshimcha parametrlar.',
            'key_label' => 'Parametr',
            'value_label' => 'Qiymat',
        ],
    ],
];
