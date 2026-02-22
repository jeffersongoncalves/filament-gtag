<?php

namespace JeffersonGoncalves\Filament\Gtag\Pages;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Gtag\Settings\GtagSettings;

class ManageGtagSettings extends SettingsPage
{
    protected static string $settings = GtagSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function getNavigationLabel(): string
    {
        return __('filament-gtag::pages.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-gtag::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-gtag::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-gtag::pages.sections.general.heading'))
                    ->description(__('filament-gtag::pages.sections.general.description'))
                    ->schema([
                        TextInput::make('gtag_id')
                            ->label(__('filament-gtag::pages.fields.gtag_id.label'))
                            ->helperText(__('filament-gtag::pages.fields.gtag_id.helper'))
                            ->placeholder('G-XXXXXXXXXX')
                            ->nullable(),

                        Toggle::make('enabled')
                            ->label(__('filament-gtag::pages.fields.enabled.label'))
                            ->helperText(__('filament-gtag::pages.fields.enabled.helper')),

                        Toggle::make('anonymize_ip')
                            ->label(__('filament-gtag::pages.fields.anonymize_ip.label'))
                            ->helperText(__('filament-gtag::pages.fields.anonymize_ip.helper')),
                    ])->columns(2),

                Section::make(__('filament-gtag::pages.sections.advanced.heading'))
                    ->description(__('filament-gtag::pages.sections.advanced.description'))
                    ->collapsed()
                    ->schema([
                        KeyValue::make('additional_config')
                            ->label(__('filament-gtag::pages.fields.additional_config.label'))
                            ->helperText(__('filament-gtag::pages.fields.additional_config.helper'))
                            ->keyLabel(__('filament-gtag::pages.fields.additional_config.key_label'))
                            ->valueLabel(__('filament-gtag::pages.fields.additional_config.value_label')),
                    ]),
            ]);
    }
}
