<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchasingController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth");
    }
}
