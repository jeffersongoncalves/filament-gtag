<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'Ayarlar',
    'title' => 'Google Analytics ayarları',
    'sections' => [
        'general' => [
            'heading' => 'Genel',
            'description' => 'Google Analytics izlemenizi yapılandırın.',
        ],
        'advanced' => [
            'heading' => 'Gelişmiş yapılandırma',
            'description' => 'gtag yapılandırması için ek parametreler.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google Etiket Kimliği',
            'helper' => 'Google Analytics ölçüm kimliğiniz (ör. G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'İzlemeyi etkinleştir',
            'helper' => 'Google Analytics betiğini etkinleştirin veya devre dışı bırakın.',
        ],
        'anonymize_ip' => [
            'label' => 'IP\'yi anonimleştir',
            'helper' => 'GDPR uyumluluğu için ziyaretçi IP adreslerini anonimleştirin.',
        ],
        'additional_config' => [
            'label' => 'Ek yapılandırma',
            'helper' => 'gtag("config", ...) fonksiyonuna iletilen ek parametreler.',
            'key_label' => 'Parametre',
            'value_label' => 'Değer',
        ],
    ],
];
