<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Routing\Controller;
use Laravel\Sanctum\HasApiTokens;


class UserController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return UserResource::collection(User::all());
    }

}