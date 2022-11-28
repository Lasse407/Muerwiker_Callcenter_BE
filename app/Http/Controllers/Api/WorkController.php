<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Work;
use http\Env\Request;
use \Illuminate\Http\Response;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return response()->json([
            'status' => true,
            'works' => $works
        ]);
    }

    public function create()
    {
        //
    }

    public function store (Request $request)
    {
        $work = Work::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Work-object created successfully!',
            'work' => $work
        ], 200);
    }

    public function show(Work $work)
    {
        return $work;
    }

    public function edit(Work $work)
    {
        //
    }

    public function update(Request $request, Work $work)
    {
        $work->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Work-object created successfully!",
            'work' => $work
        ], 200);
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return response()->json([
            'status' => true,
            'message' => "Work-object deleted successfully!",
        ], 200);
    }
}
