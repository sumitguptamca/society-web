<?php

namespace App\Http\Controllers\Api\Client\Notice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function index(): JsonResponse
    {
        $title = 'Notice';

        // Fetching notices with user details
        $notices = Notice::join('users', 'notices.created_by', '=', 'users.id')
            ->select('notices.*', 'users.name as created_by_name') // Select notice fields and user name
            ->orderBy('notices.id', 'desc')
            ->paginate(10);

        // Check if notices are found
        if ($notices->isEmpty()) {
            return response()->json([
                'message' => 'No Records found.',
                'status' => false,
                'data' => []
            ], 404);
        }

        // Return the notices as a JSON response
        return response()->json([
            'message' => 'Records Found!',
            'status' => true,
            'title' => $title,
            'total_record' => $notices->count(),
            'data' => $notices
        ]);
    }
}
