<?php

namespace App\Providers;

use \Illuminate\Contracts\Routing\ResponseFactory;
use \Illuminate\Contracts\Support\DeferrableProvider;
use \Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $bindings = [
        \App\Contracts\Session::class => \App\Services\OnlineSession::class,
    ];

    public array $singletons = [];

    /**
     * Register any application services.
     * Only bind things to the service container.
     */
    public function register(): void {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(ResponseFactory $response): void {
        $this->app->resolving(\App\Contracts\Session::class, function(\App\Contracts\Session $session) {
            $session->setCode(300);
        });
    }

    /**
     * Defer the loading of the bindings when they're needed by the actual request.
     */
    public function provides(): array {
        return [\App\Contracts\Session::class];
    }
}
