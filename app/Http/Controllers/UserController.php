<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Contracts\RepoInterface;

class UserController extends Controller
{
    protected $userRepo;

    public function __construct(RepoInterface $repo){
        $this->userRepo = $repo;

    }


    public function list()
    {
        //$users = $this->userRepo->getAll();
        //$users = $this->userRepo->find(2);
        $users = $this->userRepo->select('firstName', 'lastName');
        
        /*
        $response = [];
        foreach($users as $user) 
         $response[] = [
            'firstName' => $user->firstName,
            'lastName' => $user->lastName,
         ];
         */

         return response()->json($users);
        //return $users;
    }
}
