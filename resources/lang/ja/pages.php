<?php

return [
    'navigation_label' => 'Google Analytics',
    'navigation_group' => '設定',
    'title' => 'Google Analytics 設定',
    'sections' => [
        'general' => [
            'heading' => '一般',
            'description' => 'Google Analytics のトラッキングを設定します。',
        ],
        'advanced' => [
            'heading' => '詳細設定',
            'description' => 'gtag 設定用の追加パラメータ。',
        ],
    ],
    'fields' => [
        'gtag_id' => [
            'label' => 'Google タグ ID',
            'helper' => 'Google Analytics の測定 ID（例: G-XXXXXXXXXX）。',
        ],
        'enabled' => [
            'label' => 'トラッキングを有効化',
            'helper' => 'Google Analytics スクリプトを有効または無効にします。',
        ],
        'anonymize_ip' => [
            'label' => 'IP を匿名化',
            'helper' => 'GDPR 準拠のため訪問者の IP アドレスを匿名化します。',
        ],
        'additional_config' => [
            'label' => '追加設定',
            'helper' => 'gtag("config", ...) に渡される追加パラメータ。',
            'key_label' => 'パラメータ',
            'value_label' => '値',
        ],
    ],
];
