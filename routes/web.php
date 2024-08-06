<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/privacy', [PrivacyController::class, 'privacy'])->name('privacy');


