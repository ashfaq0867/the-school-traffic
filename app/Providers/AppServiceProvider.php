<?php

namespace App\Providers;

use App\Actions\AddFinalQuiz;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('VoyagerGuard', function () {
            return 'admin';
        });
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
//        Paginator::defaultView('vendor.pagination.tailwind');
        Voyager::addAction(\App\Actions\AddButton::class);
        Voyager::addAction(\App\Actions\AddQuizQuestion::class);
        Voyager::addAction(\App\Actions\AddFinalQuiz::class);
    }
}
