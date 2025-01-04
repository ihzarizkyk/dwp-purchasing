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
        return view("login");
    }

    public function postlogin(Request $r)
    {
        $r->validate([
            "name" => "required",
            "password" => "required",
        ]);
        
        if(Auth::attempt(['name' => $r->name, 'password' => $r->password]))
        {
            $r->session()->regenerate();

            return redirect("/dashboard");
        }else{
            return redirect("/login");
        };
    }

    public function logout()
    {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect('/');
    }
}
