<?php

namespace Inalto\FilamentCoordPicker;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

//use Inalto\FilamentCoordPicker\Commands\FilamentCoordPickerCommand;

class FilamentCoordPickerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-coord-picker')
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted()
    {
        FilamentAsset::register([
            Css::make('leaflet', __DIR__.'/../dist/coord-picker.css')->loadedOnRequest(),
            AlpineComponent::make('coord-picker', __DIR__.'/../dist/coord-picker.js')->loadedOnRequest(),
        ], package: FilamentCoordPicker::getPackageName());
    }
}
