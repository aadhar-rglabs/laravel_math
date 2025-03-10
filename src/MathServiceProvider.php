<?php
namespace Aadhar\Math;

use Illuminate\Support\ServiceProvider;

class MathServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('math', function ($app) {
            return new MathService();
        });
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