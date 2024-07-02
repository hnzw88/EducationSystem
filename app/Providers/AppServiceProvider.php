<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
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
        Validator::extend('katakana', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/[ァ-ヴー]+/u', $value);
        });
        Validator::extend('hankaku', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[a-zA-Z0-9]+$/', $value);
        });
    }
}
