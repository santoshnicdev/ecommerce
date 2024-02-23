<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get("/india",[ProductController::class,'india']);

Route::view("/","login");
Route::post("/login", [UserController::class,"login"]);
