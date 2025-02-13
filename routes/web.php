<?php

use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('settings/show/', [SettingsController::class, 'show']);
