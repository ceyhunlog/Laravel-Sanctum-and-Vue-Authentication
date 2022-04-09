<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SecretController;

Route::get('/secrets', [SecretController::class, 'index']);