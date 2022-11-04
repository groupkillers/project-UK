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
            'password' => 'required|min:6',
        ]);
        
        $user = Register::create([
            'user_name' => $request->username,
            'user_password' => Hash::make($request->password),
            'user_roal' => $request->role,
        ]);
		
        return Response()
            ->json($user);
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:32|string',
        ]);

        $username = $request->username;

        $getDetails = Register::whereUserName($username)
            ->first();

        if(empty($getDetails)) {
            return Response()
                ->json([
                    'errors' => ['something wrong!']
                ], 422);
        }

        if(!Hash::check($request->password,$getDetails->user_password)) {
            return Response()
                ->json([
                    'errors' => ['invalid password or user name']
                ], 422);
        }else {
            if(
                $getDetails
                    ->user_roal == 'admin'
            ) {
                return 'go admin page';
            } else {
                return 'go staff page';
            }
        }
    }
}
