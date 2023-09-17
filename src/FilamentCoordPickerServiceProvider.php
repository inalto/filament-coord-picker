<?php

namespace Inalto\FilamentCoordPicker;

use Inalto\FilamentCoordPicker\Commands\FilamentCoordPickerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViews()
            ->hasMigration('create_filament-coord-picker_table')
            ->hasCommand(FilamentCoordPickerCommand::class);
    }
}
