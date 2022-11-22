<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DrivingService;

class DrivingServiceController extends Controller
{
    public function index()
    {
        return DrivingService::all();
    }
}
