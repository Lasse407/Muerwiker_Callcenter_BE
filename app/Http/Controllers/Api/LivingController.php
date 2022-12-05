<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLivingRequest;
use App\Models\Living;
use Illuminate\Http\Request;

class LivingController extends Controller
{
    public function index()
    {
        return Living::all();
    }
}
