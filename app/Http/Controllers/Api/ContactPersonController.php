<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContactPerson;

class ContactPersonController extends Controller
{
    public function index()
    {
        return ContactPerson::all();
    }
}
