<?php

namespace App\Http\Controllers\Api\Client\Renovation;

use App\Http\Controllers\Controller;
use App\Models\Renovation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiRenovationController extends Controller
{
    public function index(Request $request)
    {
        // return 123;
        try {
            $userId = auth()->id();
            $renovationRequest = Renovation::from('renovations')
                ->select('renovations.*')
                ->where('flatowner_id' , $userId)
                ->orderBy('id', 'desc')
                ->paginate($request->get('per_page', 10)); // Default to 10 items per page
    
            // Success response with paginated data
            return response()->json([
                'success' => true,
                'message' => 'Record Found!',
                'total_record' => $renovationRequest->count(),
                'per_page' => $renovationRequest->perPage(),
                'records' => $renovationRequest,
                // 'data' => $tickets,
            ], 200);
        } catch (\Exception $e) {
            // Error response
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching Renovation .',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    

    public function store(Request $request)
    {
        $rule = array(
            'request_name' => 'required|string|max:255',
            'phone' => ['nullable','numeric','digits_between:10,15'],
        );

        $validation = validator::make($request->all(), $rule);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            try {
                // Generate the ticket number
               
                // Create the ticket
                $renorequest = Renovation::create([
                    'flatowner_id' => $request->user_id,
                    'request' => $request->request_name ?: null,
                    'phone'       => $request->phone ?: null,
                    'note'  => $request->description ?: null,
                ]);

                // Success response
                return response()->json([
                    'success' => true,
                    'message' => 'Request created successfully!',
                    'data' => $renorequest,
                ], 201);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while creating the Request.',
                    'error' => $e->getMessage(),
                ], 500);
            }
        }

    }

    public function destroy(Request $request, $id)
    {
        try {
            $renovation = Renovation::where('id', $id)
                ->where('flatowner_id',  $request->user_id) // Ensure the ticket belongs to the user
                ->first();

            if (!$renovation) {
                return response()->json([
                    'success' => false,
                    'message' => 'Ticket not found or you do not have permission to delete it.',
                ], 404);
            }

            // Delete the ticket
            $renovation->delete();

            return response()->json([
                'success' => true,
                'message' => 'Request deleted successfully.',
            ], 200);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the Request.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
