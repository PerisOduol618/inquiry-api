<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Validator;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquiries = Inquiry::all();

        if ($inquiries->count() > 0) {
            return response()->json([
                'status' => 200,
                'inquiries' => $inquiries
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No inquiries found'
            ], 404);
        }
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        } else {
            $inquiry = Inquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);

            if ($inquiry) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Inquiry created successfully'
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ], 500);
            }
        }
    }
}
