<?php

use App\Http\Middleware\Admin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Auth;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(Auth::class);
        $middleware->redirectTo(
            guests: '/admin',
            users: '/admin/dashboard'
        );
    })
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(Auth::class);
        $middleware->redirectTo(
            guests: '/client/login',
            users: '/client/dashboard',
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
