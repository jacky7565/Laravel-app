<?php

use App\Http\Middleware\AuthCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// use app/Http/Middleware/AuthCheck.php;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias(['auth.check'=>AuthCheck::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
