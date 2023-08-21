<?php

namespace App\Http\Controllers;

use App\Http\Resources\Resources;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        return Resources::collection(User::all());
    }
}
