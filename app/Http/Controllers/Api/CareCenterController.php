<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareCenterRequest;
use App\Models\CareCenter;
use Illuminate\Http\JsonResponse;
use \Illuminate\Http\Request;
use Illuminate\Http\Response;

class CareCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $careCenters = CareCenter::all();

        return response()->json([
            'status' => true,
            'careCenters' => $careCenters
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

        $careCenter = CareCenter::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'CareCenter-object created successfully!',
            'careCenter' => $careCenter
        ], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param CareCenter $careCenter
     * @return CareCenter
     */
    public function show(CareCenter $careCenter): CareCenter
    {
        return $careCenter;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param CareCenter $careCenter
     * @return JsonResponse
     */
    public function update(Request $request, CareCenter $careCenter): JsonResponse
    {
        $careCenter->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "CareCenter-object created successfully!",
            'careCenter' => $careCenter
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CareCenter $careCenter
     * @return JsonResponse
     */
    public function destroy(CareCenter $careCenter): JsonResponse
    {
        $careCenter->delete();

        return response()->json([
            'status' => true,
            'message' => "CareCenter-object deleted successfully!",
        ], 200);
    }
}
