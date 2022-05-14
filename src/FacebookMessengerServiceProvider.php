<?php

namespace Collinped\FacebookMessenger;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Collinped\FacebookMessenger\Commands\FacebookMessengerCommand;

class FacebookMessengerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-facebook-messenger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-facebook-messenger_table')
            ->hasCommand(FacebookMessengerCommand::class);
    }
}
