<?php

namespace App\Http\Controllers\Api\Client\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{

    public function index(Request $request)
    {
        try {
            // Retrieve tickets with pagination
            $userId = auth()->id();
            $tickets = Ticket::query()
                ->select('id', 'title', 'ticket_no', 'phone', 'email', 'description', 'created_at')
                ->where('flateowner_id' , $userId)
                ->orderBy('id', 'desc')
                ->paginate($request->get('per_page', 10)); // Default to 10 items per page
    
            // Success response with paginated data
            return response()->json([
                'success' => true,
                'message' => 'Record Found!',
                'total_record' => $tickets->count(),
                'per_page' => $tickets->perPage(),
                'records' => $tickets,
                // 'data' => $tickets,
            ], 200);
        } catch (\Exception $e) {
            // Error response
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching tickets.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    

    public function store(Request $request)
    {
        $rule = array(
            'ticket_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:15',
            'description' => 'nullable|string',
        );
        $validation = Validator::make($request->all(), $rule);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            try {
                // Generate the ticket number
                $lastTicket = Ticket::orderBy('id', 'desc')->first();
                $ticketNo = 'TICKET-' . str_pad(optional($lastTicket)->id + 1, 6, '0', STR_PAD_LEFT);

                // Create the ticket
                $ticket = Ticket::create([
                    'flateowner_id' => $request->user_id,
                    'title' => $request->ticket_name ?? '',
                    'ticket_no' => $ticketNo ?? '',
                    'phone' => $request->phone ?? '',
                    'email' => $request->email ?? '',
                    'description' => $request->description ?? '',
                ]);

                // Success response
                return response()->json([
                    'success' => true,
                    'message' => 'Ticket created successfully!',
                    'data' => $ticket,
                ], 201);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while creating the ticket.',
                    'error' => $e->getMessage(),
                ], 500);
            }
        }

    }

    public function destroy(Request $request, $id)
    {
        try {
            // Find the ticket by ID
            $ticket = Ticket::where('id', $id)
                ->where('flateowner_id', $request->user_id) // Ensure the ticket belongs to the user
                ->first();

            if (!$ticket) {
                return response()->json([
                    'success' => false,
                    'message' => 'Ticket not found or you do not have permission to delete it.',
                ], 404);
            }

            // Delete the ticket
            $ticket->delete();

            return response()->json([
                'success' => true,
                'message' => 'Ticket deleted successfully.',
            ], 200);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the ticket.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


}
