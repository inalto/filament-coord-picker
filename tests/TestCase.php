<?php

namespace Inalto\FilamentCoordPicker\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Inalto\FilamentCoordPicker\FilamentCoordPickerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Inalto\\FilamentCoordPicker\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentCoordPickerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-coord-picker_table.php.stub';
        $migration->up();
        */
    }
}
