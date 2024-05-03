<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar las credenciales del usuario
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si las credenciales son válidas, obtener el usuario autenticado
            $user = Auth::user();
            // Generar un token de autenticación y devolverlo en la respuesta
            $token = $user->createToken('AuthToken')->plainTextToken;
            return response()->json(['token' => $token]);
        } else {
            // Si las credenciales no son válidas, devolver un error de autenticación
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
