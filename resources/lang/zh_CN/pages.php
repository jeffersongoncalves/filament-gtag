<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => '设置',
    'title' => 'Google Analytics 设置',
    'sections' => [
        'general' => [
            'heading' => '常规',
            'description' => '配置你的 Google Analytics 跟踪。',
        ],
        'advanced' => [
            'heading' => '高级配置',
            'description' => 'gtag 配置的附加参数。',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google 代码 ID',
            'helper' => '你的 Google Analytics 衡量 ID（例如 G-XXXXXXXXXX）。',
        ],
        'enabled' => [
            'label' => '启用跟踪',
            'helper' => '启用或禁用 Google Analytics 脚本。',
        ],
        'anonymize_ip' => [
            'label' => '匿名化 IP',
            'helper' => '匿名化访客 IP 地址以符合 GDPR 要求。',
        ],
        'additional_config' => [
            'label' => '附加配置',
            'helper' => '传递给 gtag("config", ...) 的额外参数。',
            'key_label' => '参数',
            'value_label' => '值',
        ],
    ],
];
