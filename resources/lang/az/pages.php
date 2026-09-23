<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Parametrlər',
    'title' => 'Google Analytics parametrləri',
    'sections' => [
        'general' => [
            'heading' => 'Ümumi',
            'description' => 'Google Analytics izləməsini konfiqurasiya edin.',
        ],
        'advanced' => [
            'heading' => 'Qabaqcıl konfiqurasiya',
            'description' => 'gtag konfiqurasiyası üçün əlavə parametrlər.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google Tag ID',
            'helper' => 'Google Analytics ölçmə ID-niz (məs., G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'İzləməni aktiv et',
            'helper' => 'Google Analytics skriptini aktiv və ya deaktiv edin.',
        ],
        'anonymize_ip' => [
            'label' => 'IP-ni anonimləşdir',
            'helper' => 'GDPR uyğunluğu üçün ziyarətçi IP ünvanlarını anonimləşdirin.',
        ],
        'additional_config' => [
            'label' => 'Əlavə konfiqurasiya',
            'helper' => 'gtag("config", ...) funksiyasına ötürülən əlavə parametrlər.',
            'key_label' => 'Parametr',
            'value_label' => 'Dəyər',
        ],
    ],
];
