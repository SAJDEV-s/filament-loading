<?php

namespace Loading\FilamentLoading\Commands;

use Illuminate\Console\Command;

class FilamentLoadingCommand extends Command
{
    public $signature = 'filament-loading';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
