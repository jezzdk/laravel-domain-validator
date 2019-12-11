<?php

namespace Jezzdk\Laravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Jezzdk\Laravel\Validator\Domain;
use Jezzdk\Laravel\Validator\DomainActive;

class LaravelDomainValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('domain', Domain::class);
        Validator::extend('domain_active', DomainActive::class);
    }
}
