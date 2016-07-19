<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::Attempt($credentials)) {
                return response()->json(['error' => 'login ou senha inválidos'], 401);
            }
        }
        catch(JWTException $e){
            return response()->json(['error' => 'erro ao criar o token'], 500);
        }

        return response()->json(compact('token'));

    }
}
