<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Repositories\UserRepository;
use App\Infra\Daos\UsersDao;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // ServiceLocatorパターン　こちらを差し替えることで依存解決先を柔軟に変更できる
        $this->app->bind(UserRepository::class, UsersDao::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
