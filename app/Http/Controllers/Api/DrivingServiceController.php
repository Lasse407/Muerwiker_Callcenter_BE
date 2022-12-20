<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DrivingService;
use Illuminate\Http\JsonResponse;
use \Illuminate\Http\Request;
use Illuminate\Http\Response;

class DrivingServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $drivingServices = DrivingService::all();

        return response()->json([
            'status' => true,
            'drivingServices' => $drivingServices
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

        $drivingService = DrivingService::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'DrivingService-object created successfully!',
            'drivingService' => $drivingService
        ], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param DrivingService $drivingService
     * @return DrivingService
     */
    public function show(DrivingService $drivingService): DrivingService
    {
        return $drivingService;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param DrivingService $drivingService
     * @return JsonResponse
     */
    public function update(Request $request, DrivingService $drivingService): JsonResponse
    {
        $drivingService->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "DrivingService-object created successfully!",
            'drivingService' => $drivingService
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DrivingService $drivingService
     * @return JsonResponse
     */
    public function destroy(DrivingService $drivingService): JsonResponse
    {
        $drivingService->delete();

        return response()->json([
            'status' => true,
            'message' => "DrivingService-object deleted successfully!",
        ], 200);
    }
}

