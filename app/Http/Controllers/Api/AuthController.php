<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\ApiCode;
use App\ApiMessage;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::create($request->all());

        $data = [
            'user' => $user,
        ];
        return $this->respond($data);
    }

    public function login(LoginRequest $request)
    {
        $request->validated();
        $user = User::where('email', $request['email'])->first();
        $token = $user->createToken('auth_token')->plainTextToken;
        $user->token = $token;
        $msg = 'Hi ' . $user->name . ', welcome ';
        $response = $user;
        if (!Hash::check($request->password, $user->password) || !$user) {
            return $this->respondWithError(ApiCode::UNAUTHORIZED, ApiMessage::UNAUTHORIZED);
        }

        $data = [
            'user' => $user,
            'token' => $token
        ];

        return $this->respond($data, $msg);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return $this->respond(
            null,
            'You have logged out successfully and the token was successfully deleted',
        );
    }
}
