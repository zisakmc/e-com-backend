<?php

namespace App\Http\Controllers;

use App\Http\Resources\Resources;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        return Resources::collection(Products::all());
    }
}
