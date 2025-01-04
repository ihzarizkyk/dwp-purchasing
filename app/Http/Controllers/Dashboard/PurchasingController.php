<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Req;
use App\Http\Models\Category;
use App\Http\Models\User;

class PurchasingController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth");
    }

    public function index()
    {
        $ar = Req::all();
        $ns = Req::where("user_id",Auth::user()->id)->get();
        return view("dashboard.purch",compact("ar","ns"));
    }

    public function requests()
    {
        $category = Category::all();

        return view("dashboard.purchasing.request",compact("category"));
    }

    public function postrequests(Request $req)
    {
        $req->validate([
            "description" => "required"]);

        $purc = new Req;
        $purc->user_id = Auth::user()->id;
        $purc->category_id = $req->category ?? null;
        $purc->description = $req->description;
        $purc->status = "pending";
        $purc->save();

        return redirect()->back()->with("success","purchasing has been requested");
    }

    public function approve(Request $req,$id)
    {
        if(Auth::user()->role_id == 1 && Auth::user()->role_id == 3) 
        {
            $purc = Req::findOrFail($id);
            $purc->status = "approve";
            $purc->update();

            return redirect()->back();
        }else{
            return abort(403);
        }
    }

    public function reject(Request $req,$id)
    {
        if(Auth::user()->role_id == 1 && Auth::user()->role_id == 3) 
        {
            $purc = Req::findOrFail($id);
            $purc->status = "reject";
            $purc->update();
            
            return redirect()->back();
        }else{
            return abort(403);
        }
    }
}
