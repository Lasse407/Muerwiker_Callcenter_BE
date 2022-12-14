<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Models\Admin;
use Illuminate\Http\JsonResponse;
use \Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $admins = Admin::all();

        return response()->json([
            'status' => true,
            'admins' => $admins
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

        $admin = Admin::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Admin-object created successfully!',
            'admin' => $admin
        ], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param Admin $admin
     * @return Admin
     */
    public function show(Admin $admin): Admin
    {
        return $admin;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Admin $admin
     * @return JsonResponse
     */
    public function update(Request $request, Admin $admin): JsonResponse
    {
        $admin->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Admin-object created successfully!",
            'admin' => $admin
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Admin $admin
     * @return JsonResponse
     */
    public function destroy(Admin $admin): JsonResponse
    {
        $admin->delete();

        return response()->json([
            'status' => true,
            'message' => "Admin-object deleted successfully!",
        ], 200);
    }
}
