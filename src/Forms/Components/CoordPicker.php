<?php

namespace Inalto\FilamentCoordPicker\Forms\Components;

use Filament\Forms\Components\Concerns\HasAffixes;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Forms\Components\Field;
use Inalto\FilamentCoordPicker\Enums\CoordPickerTheme;

class CoordPicker extends Field
{
    use HasAffixes,
        HasExtraInputAttributes,
        HasPlaceholder;

    const PACKAGE_NAME = 'inalto/filament-coord-picker';

    protected string $view = 'filament-coord-picker::forms.components.coord-picker';

    protected array $config = [];

    protected CoordPickerTheme $theme = CoordPickerTheme::DEFAULT;

    public function getTheme(): string
    {
        return 'default';
    }

    public function getConfig(): array
    {
        $config = [];

        return $config;
    }

    public function getThemeAsset(): string
    {
        return asset('css/'.static::PACKAGE_NAME.'/coordpicker.css');
    }

    public function getDarkThemeAsset(): string
    {
        return asset('css/'.static::PACKAGE_NAME.'/coordpicker.css');
    }

    public function getLightThemeAsset(): string
    {
        return asset('css/'.static::PACKAGE_NAME.'/coordpicker.css');
    }
}
