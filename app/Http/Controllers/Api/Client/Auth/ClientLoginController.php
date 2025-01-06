<?php

namespace App\Http\Controllers\Api\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\FlateOwner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Token;

class ClientLoginController extends Controller
{
    public function userLogin(Request $request)
		{
			$request->validate([
				'username' => 'required|string',
				'password' => 'required|string',
			]);
	
			$loginData = $request->only('username', 'password');
		
			if (!auth('flatowner')->attempt($loginData)) {
				return response()->json([
					'message' => 'Invalid credentials',
					'status' => false
				], 401);
			}
		
			$user = auth('flatowner')->user();
			$token = $user->createToken('authToken')->accessToken;
		
			return response()->json([
				'status' => true,
				'message' => "Login successfully",
				'access_token' => $token,
				'data' => $user,
			]);
		}

		public function clientLogout(Request $request)
		{
			try{
				$user = $request->user('flatowner');
				$user = $request->user('flatowner');
				if ($user) {
					$user->currentAccessToken()->delete();
				}
				return response()->json([
					'success' => true,
					'message' => 'Logged out successfully!',
				], 200);
				
			}catch(Exception $ex){
				return response()->json([
					'status' => false,
					'message' => $ex->getMessage(),
					
				]);
			}
			
		}
}
