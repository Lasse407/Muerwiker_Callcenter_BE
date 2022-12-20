<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\JsonResponse;
use \Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $works = Work::all();

        return response()->json([
            'status' => true,
            'works' => $works
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store (Request $request): JsonResponse
    {

        $work = Work::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Work-object created successfully!',
            'work' => $work
        ], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param Work $work
     * @return Work
     */
    public function show(Work $work): Work
    {
        return $work;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Work $work
     * @return JsonResponse
     */
    public function update(Request $request, Work $work): JsonResponse
    {
        $work->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Work-object created successfully!",
            'work' => $work
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Work $work
     * @return JsonResponse
     */
    public function destroy(Work $work): JsonResponse
    {
        $work->delete();

        return response()->json([
            'status' => true,
            'message' => "Work-object deleted successfully!",
        ], 200);
    }
}
