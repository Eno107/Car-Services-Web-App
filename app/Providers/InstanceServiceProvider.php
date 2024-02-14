<?php

namespace App\Providers;

use App\Http\Services\AppointmentService;
use App\Http\Services\CommentService;
use App\Http\Services\UserService;
use App\Http\Services\CarService;
use App\Http\Services\ProblemService;
use App\Repositories\Eloquent\AppointmentRepository;
use Illuminate\Support\ServiceProvider;
use Exception;


use App\Repositories\Eloquent\CarRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CommentRepository;
use App\Repositories\Eloquent\MakeRepository;
use App\Repositories\Eloquent\ProblemRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\Repositories\Eloquent\UserRepository;

class InstanceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(
        //     AuthenticationInterface::class,
        //     Authentication::class
        // );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     * @throws Exception
     */
    public function boot()
    {
        $this->app->instance(
            CommentService::class,
            new CommentService(
                new CommentRepository($this->app)
            )
        );

        $this->app->instance(
            ProblemService::class,
            new ProblemService(
                new ProblemRepository($this->app)
            )
        );

        $this->app->instance(
            CarService::class,
            new CarService(
                new CarRepository($this->app)
            )
        );

        $this->app->instance(
            AppointmentService::class,
            new AppointmentService(
                new AppointmentRepository($this->app)
            )
        );
    }
}
