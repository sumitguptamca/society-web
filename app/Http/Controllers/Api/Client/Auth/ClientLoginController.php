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
				$token = Auth::guard('api')->token();
				return response()->json([
					'status' => true,
					'message' => 'Logged out successfully!',
					'token' => $token,
					
				]);
				// $credentials = $request->only('username', 'password');
				// $flatowner = FlateOwner::where('username', $credentials['username'])->first();

				// // If flatowner is not found or password doesn't match
				// if (!$flatowner || !Hash::check($credentials['password'], $flatowner->password)) {
				// 	return response()->json([
				// 		'message' => 'Invalid username or password.',
				// 		'status' => false
				// 	], 401); // Unauthorized
				// }

				// // Authenticate the user using flatowner guard
				// Auth::guard('flatowner')->login($flatowner);

				// $token = $request->bearerToken();
				// if (!$token) {
				// 	return response()->json([
				// 		'status' => false,
				// 		'message' => 'No token provided.',
						
				// 	], 400);
				// }
				
			}catch(Exception $ex){
				return response()->json([
					'status' => false,
					'message' => $ex->getMessage(),
					
				]);
			}
			
		}
}
