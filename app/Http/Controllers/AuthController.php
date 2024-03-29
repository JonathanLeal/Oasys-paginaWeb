<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        $validator = Validator::make($credentials, [
            'email'    => 'required|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['validaciones' => $validator->errors()], 422); 
        }

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'No autorizado'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['mensaje' => 'Cierre de sesión exitoso']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'usuario' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['mensaje' => $validator->errors()], 422);
        }

        DB::beginTransaction();
        try {
            $user = new User();
            $user->name     = $request->usuario;
            $user->email    = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['error' => $th->getMessage()], 500);
        }
        DB::commit();
        return response()->json(['mensaje' => 'usuario registrado con exito']);
    }
}