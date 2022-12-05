<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareCenterRequest;
use App\Models\CareCenter;
use Illuminate\Http\Request;

class CareCenterController extends Controller
{
    public function index()
    {
        return CareCenter::all();
    }
}
