<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\UserRegistered;
use App\Models\User;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" =>"required",
            "email" => "required|email",
            "password" => "required",
            "confirm_password" => "required|same:password"
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 0,
                "message" => "validation error",
                "data" => $validator->errors()->all()
            ]);
        }
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);
        Mail::to('abiodunemma769@gmail.com')->send(new UserRegistered($user));


        $response = [];
        $response['token'] = $user->createToken("MyApp")->accessToken;
        $response['user'] = $user->name;
        $response['email'] = $user->email;
        return response()->json([
            "status" => 1,
            "message" => "User register",
            "data" => $response
        ]);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            $user = Auth::user();
            $response = [];
            $response['token'] = $user->createToken("MyApp")->accessToken;
            $response['user'] = $user->name;
            $response['email'] = $user->email;
            return response()->json([
                "status" => 1,
                "message" => "User logedin",
                "data" => $response
            ]);
        }
        return response()->json([
            "status" => 0,
            "message" => "User unauthentication.",
            "data" =>null

        ]);
    }

}
