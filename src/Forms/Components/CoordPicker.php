<?php

namespace Inalto\FilamentCoordPicker\Forms\Components;

use Filament\Forms\Components\Concerns\HasAffixes;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Forms\Components\Field;

class CoordPicker extends Field
{
    use HasAffixes,
        HasExtraInputAttributes,
        HasPlaceholder;

    const PACKAGE_NAME = 'inalto/filament-coord-picker';

    protected string $view = 'filament-coord-picker::forms.components.coord-picker';

    protected array $config = [];

    public function getConfig(): array
    {
        $config = [];

        return $config;
    }

    public function getThemeAsset(): string
    {
        return asset('css/'.static::PACKAGE_NAME.'/coordpicker.css');
    }
}
