<?php

namespace App\Providers;

use App\Services\Calculator\Calculator;
use App\Services\Calculator\Contracts\ICalculator;
use App\Services\Calculator\Contracts\IValue;
use App\Services\Calculator\Value;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICalculator::class, Calculator::class);
        $this->app->bind(IValue::class, Value::class);
    }
}