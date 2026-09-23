<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Google Analytics',
    'sections' => [
        'general' => [
            'heading' => 'عمومی',
            'description' => 'ردیابی Google Analytics خود را پیکربندی کنید.',
        ],
        'advanced' => [
            'heading' => 'پیکربندی پیشرفته',
            'description' => 'پارامترهای اضافی برای پیکربندی gtag.',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'شناسه Google Tag',
            'helper' => 'شناسه اندازه‌گیری Google Analytics شما (مثلاً G-XXXXXXXXXX).',
        ],
        'enabled' => [
            'label' => 'فعال‌سازی ردیابی',
            'helper' => 'اسکریپت Google Analytics را فعال یا غیرفعال کنید.',
        ],
        'anonymize_ip' => [
            'label' => 'ناشناس‌سازی IP',
            'helper' => 'ناشناس‌سازی آدرس‌های IP بازدیدکنندگان برای انطباق با GDPR.',
        ],
        'additional_config' => [
            'label' => 'پیکربندی اضافی',
            'helper' => 'پارامترهای اضافی که به gtag("config", ...) ارسال می‌شوند.',
            'key_label' => 'پارامتر',
            'value_label' => 'مقدار',
        ],
    ],
];
