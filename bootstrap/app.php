<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->group(base_path('routes/panel.php'));

        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->alias([
            'api.custom' => \App\Http\Middleware\ApiMiddleware::class,
            'panel' => \App\Http\Middleware\PanelMiddleware::class,
            'web' => \App\Http\Middleware\WebMiddleware::class,
            'nocache' => \App\Http\Middleware\NoCacheMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
