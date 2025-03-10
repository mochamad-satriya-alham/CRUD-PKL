<?php

namespace App\Providers;
use App\Repository\StudentRepositoryInterface;
use App\Repository\StudentRepository;
use App\Repository\RayonRepositoryInterface;
use App\Repository\RayonRepository;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void 
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(RayonRepositoryInterface::class, RayonRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
