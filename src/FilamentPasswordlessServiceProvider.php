<?php

namespace BradyRenting\FilamentPasswordless;

use BradyRenting\FilamentPasswordless\Http\Livewire\Auth;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPasswordlessServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-passwordless';

    public function packageBooted(): void
    {
        parent::packageBooted();

        Livewire::component(Auth\Login::getName(), Auth\Login::class);
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasRoute('web')
            ->hasTranslations()
            ->hasViews();
    }
}
