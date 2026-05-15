<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Patterns\Factory\IRazaFactory;
use App\Patterns\Factory\RazaFactory;
use App\Repositories\IAnimalRepository;
use App\Repositories\InMemoryAnimalRepository; // <-- Registramos la de memoria

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Singleton de Factory
        $this->app->singleton(IRazaFactory::class, RazaFactory::class);

        // Enlace de Repository apuntando a Memoria (Sin BD)
        $this->app->bind(IAnimalRepository::class, InMemoryAnimalRepository::class);
    }
}