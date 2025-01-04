<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController as Login;
use App\Http\Controllers\Dashboard\DashboardController as Dashboard;
use App\Http\Controllers\Dashboard\PurchasingController as Purchase;
use App\Http\Controllers\Dashboard\ItemController as Item;
use App\Http\Controllers\Dashboard\VendorController as Vendor;

Route::get("/",[Login::class,"login"]);
Route::post("/login",[Login::class,"postlogin"]);

Route::get("/dashboard/purchasing",[Purchase::class,"index"]);
Route::get("/dashboard/purchasing/request",[Purchase::class,"requests"]);
Route::post("/dashboard/purchasing/postrequest",[Purchase::class,"postrequests"]);
Route::get("/dashboard/purchasing/approve/{id}",[Purchase::class,"approve"]);
Route::get("/dashboard/purchasing/reject/{id}",[Purchase::class,"reject"]);
