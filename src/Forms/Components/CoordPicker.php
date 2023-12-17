<?php
namespace Inalto\FilamentCoordPicker\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasAffixes;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Forms\Components\Field;
use Inalto\FilamentCoordPicker\Enums\CoordPickerTheme;

class CoordPicker extends Field
{

    use HasPlaceholder,
    HasAffixes,
    HasExtraInputAttributes;

    const PACKAGE_NAME = 'inalto/filament-coord-picker';

    protected string $view = 'filament-coord-picker::forms.components.coord-picker';

    protected array $config = [];
    protected CoordPickerTheme $theme = CoordPickerTheme::DEFAULT;






    public function getConfig(): array
    {
        $config = [];

        return $config;
    }




    public function getTheme(): string
    {
        return $this->theme?->value;
    }

    public function getThemeAsset(): string
    {
        if ($this->getTheme() === CoordPickerTheme::DEFAULT->value) {
    //        $this->theme(CoordPickerTheme::LIGHT);
        }

        return asset('css/'.static::PACKAGE_NAME.'/coordpicker-'.$this->getTheme().'-theme.css');
    }

    public function getDarkThemeAsset(): string
    {
        return asset('css/'.static::PACKAGE_NAME.'/coordpicker-dark-theme.css');
    }

    public function getLightThemeAsset(): string
    {
        return asset('css/'.static::PACKAGE_NAME.'/coordpicker-light-theme.css');
    }
}
