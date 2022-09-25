<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Register;

class AuthController extends Controller
{
    public function register (Request $request) {
        $request->validate([
            'role' => 'required',
            'username' => 'required',
            'password' => 'required|min:6|max:32|string',
        ]);

        $user = Register::create([
            'user_name' => $request->username,
            'user_password' => Hash::make($request->password),
            'user_roal' => $request->role,
        ]);
        
    }
}
