<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController as Login;
use App\Http\Controllers\Dashboard\PurchasingController as Purchase;
use App\Http\Controllers\Dashboard\ItemController as Item;
use App\Http\Controllers\Dashboard\VendorController as Vendor;

Route::get("/",[Login::class,"login"]);
Route::post("/login",[Login::class,"postlogin"]);

// Route::group();