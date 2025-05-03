<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']) -> name('index');
Route::get('/about', [MainController::class, 'about']) -> name('about');
Route::get('/services', [MainController::class, 'services']) -> name('services');

Route::get('/contact', [MainController::class, 'contact']) -> name('contact');
Route::post('/contact/send', [MainController::class, 'send'])->name('contact.send');

Route::get('/project', [MainController::class, 'project']) -> name('project');

// Route to display the WhatsApp form
Route::get('/whatsapp', [App\Http\Controllers\WhatsAppController::class, 'showForm']);