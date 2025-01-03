<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        return $this->middleware("guest")->except("logout");
    }

    public function login()
    {
        //
    }

    public function postlogin()
    {
        //
    }

    public function logout()
    {
        //
    }
}
