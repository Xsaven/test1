<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;

Route::controller(SubmissionController::class)->group(function (Router $router) {
    $router->post('/submission', 'store');
});
