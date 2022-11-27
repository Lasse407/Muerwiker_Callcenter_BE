<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Administration;

class AdminController extends Controller
{
    public function index()
    {
        return Administration::all();
    }
}
