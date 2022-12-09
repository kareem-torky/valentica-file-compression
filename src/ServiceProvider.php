<?php

namespace Valinteca\FileCompression;

class ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(Calc::class, function () {
            return new Calc;
        });
    }
}