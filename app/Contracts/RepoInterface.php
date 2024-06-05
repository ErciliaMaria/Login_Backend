<?php 

namespace App\Contracts;

use App\Http\Controllers\UserController;

interface RepoInterface {
    public function getAll();
    public function find(UserController $id);
    public function create($data);
    public function select($columns, $columns2);
}