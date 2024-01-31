<?php

namespace App\Http\Implementations;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Services\AuthService;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthServiceImpl implements AuthService
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(AuthRequest $request){
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (! $token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        return $this->createNewToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        if(!$token = auth()->attempt($validator->validated())){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->createNewToken($token);
        
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
    }
    
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }

    /**
     * Verify the token for middleware.
     *
     * @param  string $token
     */
    public function veifyToken(Request $request){
        $token = $request->input('token');

        try {
            // Use your JWT library to validate the token
            $decodedToken = JWTAuth::decode($token);

            // If decoding is successful, the token is valid
            return response()->json(['valid' => true]);
        } catch (\Exception $e) {
            // If an exception is caught, the token is invalid
            return response()->json(['valid' => false]);
        }
    }
}
