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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'contactnumber' => 'required',
            'birthdate' => 'required',
            'streetaddress' => 'required',
            'addressline' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'comments' => 'required',
            'client_id' => 'required'
        ]);

        $user = Register::create([
            'user_name' => $request->username,
            'user_password' => Hash::make($request->password),
            'user_role' => $request->role,
            'client_id' => $request->client_id,
            'firstname' => $request->firstname, 
            'lastname' => $request->lastname,
            'email' => $request->email,
            'contact_number' => $request->contactnumber,
            'birthdate' => $request->birthdate,
            'street_address' => $request->streetaddress,
            'address_line_2' => $request->addressline,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'comments' => $request->comments
        ]);

        return Response()
            ->json([
                'message' => ['user create success..!']
                ], 200);
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
                    ->user_role == 1
            ) {
                return 'go admin page';
            } else {
                return 'go staff page';
            }
        }
    }
}
