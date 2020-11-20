<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){

        $this->validate($request,[
            "name" => "required|string|min:4",
            "email" => "required|email|unique:users",
            "password" => "required|min:6",
        ]);
        
        $haspassword = Hash::make($request->password);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $haspassword;
        $user->remember_token = "Token will generate shortly after you login";
        $user->save();
        return response()->json([
            "Success" => true,
            "Message" => "Register Berhasil",
            "Data" => $user
        ],201);
    }

    public function login(Request $request){
        $this->validate($request,[
            "email" => "required|email",
            "password" => "required|min:6",
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email',$email)->first();

        if(!$user){
            return response()->json([
                "Success" => false,
                "Message" => "Login Failed",
            ],404);
        }

        $isValidPassword = Hash::check($password, $user->password);
        if(!$isValidPassword){
            return response()->json([
                "Success" => false,
                "Message" => "Login Failed",
            ],404);
        }

        $generateToken = bin2hex(random_bytes(40));
        $user->update([
            'remember_token' => $generateToken
        ]);

        return response()->json([
            "Success" => true,
            "Data" => $user,
        ],201);
    }
}

