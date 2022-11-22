<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CareCenter;

class CareCenterController extends Controller
{
    public function index()
    {
        return CareCenter::all();
    }
}
