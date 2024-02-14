<?php

namespace App\Providers;

use App\Repositories\Contracts\AppointmentRepositoryContract;
use App\Repositories\Contracts\CarRepositoryContract;
use App\Repositories\Contracts\CategoryRepositoryContract;
use App\Repositories\Contracts\CommentRepositoryContract;
use App\Repositories\Contracts\MakeRepositoryContract;
use App\Repositories\Contracts\ProblemRepositoryContract;
use App\Repositories\Contracts\ServiceRepositoryContract;
use App\Repositories\Contracts\UserRepositoryContract;

use App\Repositories\Eloquent\AppointmentRepository;
use App\Repositories\Eloquent\CarRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CommentRepository;
use App\Repositories\Eloquent\MakeRepository;
use App\Repositories\Eloquent\ProblemRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\Repositories\Eloquent\UserRepository;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepositoryContract::class,
            UserRepository::class
        );

        $this->app->bind(
            CarRepositoryContract::class,
            CarRepository::class
        );

        $this->app->bind(
            CategoryRepositoryContract::class,
            CategoryRepository::class
        );

        $this->app->bind(
            CommentRepositoryContract::class,
            CommentRepository::class
        );

        $this->app->bind(
            MakeRepositoryContract::class,
            MakeRepository::class
        );

        $this->app->bind(
            ProblemRepositoryContract::class,
            ProblemRepository::class
        );

        $this->app->bind(
            ServiceRepositoryContract::class,
            ServiceRepository::class
        );

        $this->app->bind(
            AppointmentRepositoryContract::class,
            AppointmentRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
