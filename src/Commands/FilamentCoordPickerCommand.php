<?php

namespace Inalto\FilamentCoordPicker\Commands;

use Illuminate\Console\Command;

class FilamentCoordPickerCommand extends Command
{
    public $signature = 'filament-coord-picker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
