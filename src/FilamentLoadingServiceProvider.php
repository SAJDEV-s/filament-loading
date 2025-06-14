<?php

namespace Loading\FilamentLoading;

use Loading\FilamentLoading\Commands\FilamentLoadingCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLoadingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-loading')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_loading_table')
            ->hasCommand(FilamentLoadingCommand::class);
    }
}
