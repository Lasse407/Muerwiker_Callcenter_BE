<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Living;

class LivingController extends Controller
{
    public function index()
    {
        return Living::all();
    }
}
