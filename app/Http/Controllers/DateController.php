<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * Formatin Date
 */
class DateController
{
    /**
     * Formata Data
     * 
     * @param Request $request
     */
    public function update(Request $request){

        $user = Auth::user();
        $createdAt =  Carbon::parse($user->created_at)->format('d-m-Y');
        $updatedAt =  Carbon::parse($user->updated_at)->format('d-m-Y');
        

        return response()->json([
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ]);
    }
}
