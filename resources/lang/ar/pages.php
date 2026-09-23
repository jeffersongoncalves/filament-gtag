<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'عام',
            'description' => 'اضبط تتبع Google Analytics الخاص بك.',
        ],
        'advanced' => [
            'heading' => 'إعدادات متقدمة',
            'description' => 'معاملات إضافية لإعداد gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'معرّف Google Tag',
            'helper' => 'معرّف القياس الخاص بك في Google Analytics (مثل G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'تفعيل التتبع',
            'helper' => 'تفعيل أو تعطيل سكربت Google Analytics.',
        ],
        'anonymize_ip' => [
            'label' => 'إخفاء عنوان IP',
            'helper' => 'إخفاء عناوين IP للزوار للامتثال للائحة GDPR.',
        ],
        'additional_config' => [
            'label' => 'إعدادات إضافية',
            'helper' => 'معاملات إضافية تُمرَّر إلى gtag("config", ...).',
            'key_label' => 'المعامل',
            'value_label' => 'القيمة',
        ],
    ],
];
