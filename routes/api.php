<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

Route::any('dump', [\App\Http\Controllers\API\UserController::class, 'dump']);
