<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use \Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $contacts = Contact::all();

        return response()->json([
            'status' => true,
            'contacts' => $contacts
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

        $contact = Contact::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Contact-object created successfully!',
            'contact' => $contact
        ], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return Contact
     */
    public function show(Contact $contact): Contact
    {
        return $contact;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Contact $contact
     * @return JsonResponse
     */
    public function update(Request $request, Contact $contact): JsonResponse
    {
        $contact->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Contact-object created successfully!",
            'contact' => $contact
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $contact
     * @return JsonResponse
     */
    public function destroy(Contact $contact): JsonResponse
    {
        $contact->delete();

        return response()->json([
            'status' => true,
            'message' => "Contact-object deleted successfully!",
        ], 200);
    }
}
