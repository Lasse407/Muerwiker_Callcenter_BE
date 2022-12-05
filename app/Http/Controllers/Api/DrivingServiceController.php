<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrivingServiceRequest;
use App\Models\DrivingService;
use Illuminate\Http\Request;

class DrivingServiceController extends Controller
{
    public function index()
    {
        return DrivingService::all();
    }
}
