<?php declare(strict_types=1);

namespace HergenD\Pack;

use Illuminate\Support\ServiceProvider;
use HergenD\Pack\Commands\MakePackageCommand;

class PackServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakePackageCommand::class,
            ]);
        }
    }
}
