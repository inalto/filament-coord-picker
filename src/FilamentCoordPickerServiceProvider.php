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
            ->hasConfigFile();
    }

    public function boot()
    {
        parent::boot();
        
        // Register the view namespace explicitly
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-coord-picker');
    }

    public function packageBooted()
    {
        FilamentAsset::register([
            Css::make('coord-picker-styles', __DIR__.'/../dist/coord-picker.css'),
            AlpineComponent::make('coord-picker', __DIR__.'/../dist/coord-picker.js'),
        ], package: 'inalto/filament-coord-picker');
    }
}
