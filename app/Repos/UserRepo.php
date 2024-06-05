<?php

namespace App\Repos;

use App\Contracts\RepoInterface;
use App\Models\User;

class UserRepo implements RepoInterface{  

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->getAll(); 
    }
    public function find($id){
        return $this->model->find($id);
    }
    public function create($data){
        
    }
    public function select($columns, $columns2){
        return $this->model->select($columns, $columns2)->paginate(5);
    }
}