<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\User\UserRepository;
use App\Repository\User\UserRepositoryImplement;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

      $this->app->bind(UserRepository::class, UserRepositoryImplement::class);

      $this->app->bind(UserService::class,  UserServiceImplement::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
