<?php

namespace Inalto\FilamentCoordPicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inalto\FilamentCoordPicker\FilamentCoordPicker
 */
class FilamentCoordPicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Inalto\FilamentCoordPicker\FilamentCoordPicker::class;
    }
}
