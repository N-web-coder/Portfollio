<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/test-route', function () {
    return 'Laravel route is working!';
});

Route::get('/', function () {
    $projects = config('projects');
    return view('layouts.index', compact('projects'));
})->name('index');

Route::get('service', function () {
    $projects = config('projects');
    return view('service', compact('projects'));
})->name('service');

Route::get('about', function () {
    $projects = config('projects');
    return view('about', compact('projects'));
})->name('about');

Route::get('contact', function () {
    $projects = config('projects');
    return view('contact', compact('projects'));
})->name('contact');

Route::get('/projects/{id}', [PortfolioController::class, 'project'])
    ->name('projects');

Route::post('/contact', [PortfolioController::class, 'contact'])
    ->name('portfolio.contact');
