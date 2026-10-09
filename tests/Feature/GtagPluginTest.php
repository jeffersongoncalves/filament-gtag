<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Gtag\Settings\GtagSettings;
use JeffersonGoncalves\Filament\Gtag\GtagPlugin;
use JeffersonGoncalves\Filament\Gtag\Pages\ManageGtagSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageGtagSettings::class)
        ->and(GtagPlugin::make()->getId())->toBe('filament-gtag');
});

it('ships translated labels', function () {
    expect(ManageGtagSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManageGtagSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageGtagSettings::class)
        ->fillForm(['gtag_id' => 'G-TEST12345', 'enabled' => true])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(GtagSettings::class)->refresh();
    expect($settings->gtag_id)->toBe('G-TEST12345');
    expect($settings->enabled)->toBe(true);
});

it('injects the script into the panel once configured', function () {
    $settings = app(GtagSettings::class);
    $settings->gtag_id = 'G-TEST12345';
    $settings->enabled = true;
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('G-TEST12345');
});
