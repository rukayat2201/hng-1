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
            "current_time"=> Carbon::now()->toISOString(),
            "github_url" => "https://github.com/Jimoh-Rukayat"
        ]);
    }
}
