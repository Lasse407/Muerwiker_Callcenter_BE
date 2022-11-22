<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Administration;

class AdministrationController extends Controller
{
    public function index()
    {
        return Administration::all();
    }
}
