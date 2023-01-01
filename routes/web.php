<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;


Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/service/{type}' , [PublicController::class , 'serviceByType'])->name('serviceByType');

Route::get('/service/{id}' ,[PublicController::class , 'serviceById'])->name('serviceById');

Route::get('/contacts' , [PublicController::class ,'contacts'])->name('contacts');

Route::post('/contact/submit' , [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/grazie', [ContactController::class , 'grazie'])->name('contact.grazie');



