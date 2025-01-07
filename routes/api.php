<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PurchasingReportController as Report;


Route::middleware(['throttle:10,1'])->get("/report/purchasing/mostcategory",[Report::class,'MostCategory']);
Route::middleware(['throttle:10,1'])->get("/report/purchasing/divpermonth",[Report::class,'DivisionPerMonth']);
