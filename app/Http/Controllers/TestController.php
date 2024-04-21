<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\PersonalAccessToken as Token;


class TestController extends Controller
{

    public function index()
    {
        return response()->json(['message' => 'Authorized']);
         
    }
}
