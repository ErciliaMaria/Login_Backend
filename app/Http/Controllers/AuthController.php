<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


/**
 * Class de Autenticação
 */
class AuthController extends Controller
{
    /**
     * Faz o login
     * 
     * @param Request $request
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = null;
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            $user->tokens()->delete();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'token' => $token
            ]);
        }

        return response()->json(['user' => $user], 401);
    }
}
