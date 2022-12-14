<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLivingRequest;
use App\Models\Living;
use Illuminate\Http\JsonResponse;
use \Illuminate\Http\Request;
use Illuminate\Http\Response;

class LivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $livings = Living::all();

        return response()->json([
            'status' => true,
            'livings' => $livings
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

        $living = Living::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Living-object created successfully!',
            'living' => $living
        ], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param Living $living
     * @return Living
     */
    public function show(Living $living): Living
    {
        return $living;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Living $living
     * @return JsonResponse
     */
    public function update(Request $request, Living $living): JsonResponse
    {
        $living->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Living-object created successfully!",
            'living' => $living
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Living $living
     * @return JsonResponse
     */
    public function destroy(Living $living): JsonResponse
    {
        $living->delete();

        return response()->json([
            'status' => true,
            'message' => "Living-object deleted successfully!",
        ], 200);
    }
}

