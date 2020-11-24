<?php

namespace Overtrue\LaravelEasySms;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Overtrue\EasySms\EasySms;

class EasySmsServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides()
    {
        return [EasySms::class, 'easy-sms'];
    }

    public function register()
    {
        $this->app->singleton(EasySms::class, function () {
            return new EasySms(\config('services.easy-sms'));
        });

        $this->app->alias(EasySms::class, 'easy-sms');
    }
}
