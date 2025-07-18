<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


/**
 * Class de Autenticação
 */
class LogoutController extends Controller
{
    /**
     * Faz o logout
     * 
     * @param Request $request
     */
    public function logout(Request $request)
    {
       Auth::logout();

       $request->session->invalidate();

       $request->session->regenerateToken();

       return redirect()->route('/');
    }
}
