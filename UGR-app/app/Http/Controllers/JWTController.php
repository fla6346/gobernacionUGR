<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use JWTAuth;
use Psy\Readline\Hoa\Console;
use SebastianBergmann\Environment\Console as EnvironmentConsole;

class JWTController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth:api',['except'=>['login','register']]);
    }
    public function register(Request $request){
        \Log::info($request->all());
        try{
        $validator=Validator::make($request->all(),[
        //$request->validate([
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);
        /*if($validator->fails())
        {
            \Log::error('validation Error',$validator->errors()->toArray());
            return response()->json($validator->errors(),400);
            //Console.log('no llega');
        }*/
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
       // $token = $user->createToken('YourAppName')->accessToken;

        //return response()->json(['access_token' => $token, 'user' => $user], 201);

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ],201);
    }
    catch(ValidationException $e){
        return response()->json(['message' => $e-> validator->errors()], 422);
        }
}

    public function login(Request $request){
        $validator=Validator::make($request->all(),[
            'email'=> 'required|email',
            'password'=> 'required|string|min:6',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        if(!$token = auth('api')->attempt($validator->validated()))
        {
            return response()->json(['error'=>'Unauthorized'],401);
        }
        return $this->respondWithToken($token);
    }
    //logout
    public function logout(){
        auth('api')->logout();
        return response()->json(['message'=>'User successfully logged out']);
    }
    public function refresh(){
        return $this->respondWithToken(JWTAuth::refresh('api'));
    }
    public function profile()
    {
        return response()->json(auth('api')->user());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token'=>$token,
            'token_type' => 'bearer',
            'expires_in' => JWTAuth::factory('api')->getTTL()*60,
             "user" => auth('api')->user(),
        ]);
    }
}
