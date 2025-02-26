<?php

namespace PhapNguyenDuc\MathBasic;

use Illuminate\Support\ServiceProvider;

class MathBasicServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('math-basic', function () {
            return new MathBasic();
        });
    }

    public function boot()
    {

    }
}
