<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Req;
use App\Models\Category;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;

class PurchasingReportController extends Controller
{
    public function MostCategory()
    {
        $data = DB::table("requests")
        ->join('categories','requests.category_id','=','categories.id')
        ->select('categories.name AS categoryName',DB::raw('COUNT(requests.id) AS total_request'))
        ->groupBy('categories.name')
        ->orderBy('total_request','DESC')
        ->get();

        return response()->json($data,200);
    }

    public function DivisionPerMonth()
    {
        $data = DB::table('requests')
        ->join('users','requests.user_id','=','users.id')
        ->join('roles','users.role_id','=','roles.id')
        ->select(DB::raw('roles.name AS division, MONTH(requests.created_at) AS month, COUNT(requests.id) as total_request'))
        ->groupBy('roles.name','month')
        ->orderBy('month')
        ->get();

        return response()->json($data,200);
    }
}
