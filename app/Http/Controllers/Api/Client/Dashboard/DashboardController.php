<?php

namespace App\Http\Controllers\Api\Client\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    public function index(): JsonResponse
    {
        $title = 'Dashboard';
        $notice = $this->latestNotice();

        // Return JSON response instead of view
        if ($notice) {
            return response()->json([
                'message' => 'Record Found',
                'status' => true,
                'title' => $title,
                'data' => $notice
            ]);
        } else {
            return response()->json([
                'message' => 'No record found',
                'status' => false,
                'title' => $title,
                'data' => null
            ]);
        }
    }

    public function latestNotice()
    {
        // Fetch the latest notice with user information
        return Notice::join('users', 'notices.created_by', '=', 'users.id')
            ->orderBy('notices.created_at', 'desc')
            ->select('notices.*', 'users.name as created_by_name')  // Select notice fields and the user's name
            ->first();
    }
}
