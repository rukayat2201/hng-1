<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BasicInformationController extends Controller
{
    public function basicInfo()
    {
        return response()->json([
            "email" => "temitopeoluwa423@gmail.com",
            "current_datetime"=> Carbon::now('UTC')->format('Y-m-d\TH:i:s\Z'),
            "github_url" => "https://github.com/rukayat2201/hng-1"
        ]);
    }
}
