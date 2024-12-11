<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class, 'form'])->name('form');

Route::post('/form', [FormController::class, 'submitForm'])->name('submit');

Route::get('/showcase', [FormController::class, 'showcase'])->name('showcase');

Route::get('local/{lang}', [FormController::class, 'setLocale']);