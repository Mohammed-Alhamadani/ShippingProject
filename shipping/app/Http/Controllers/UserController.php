<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users=User::paginate(5);
        return response()->json($users);
    }

    public function show($id){
        $user=User::find($id);
        return response()->json($user);
    }

    //User Registration
    public function register(Request $request){

        $request->validate([
            'full_name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users,email',
            'password'=>'required|string|min:6|confirmed',
        ]);
        $user=User::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return response()->json(['message'=>'User Registered Successfully','user'=>$user],201);
    }

    public function login(Request $request){

        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string',
        ]);
        if(!Auth::attempt($request->only('email','password')))

        return response()->json(['message'=>'Invalid email or password'],401);

        $user=User::where('email',$request->email)->firstOrFail();
        $token=$user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message'=>'User Login Successfully',
            'user'=>$user,
            'token'=>$token],
            201);

    }
    public function logOut(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message'=>'LogOut Successfully'
        ]);
    }


    // public function store(StoreUserRequest $request){
    //     $user=User::create($request->validated());
    //     return response()->json($user);
    // }
    public function update(UpdateUserRequest $request,$id){
        $user=User::find($id);
        $user->update($request->validated());
        return response()->json($user);
    }
    public function destroy($id){
        $user=User::find($id);
        $user->delete();
        return response()->json(['message'=>$user->full_name.' '.'has been deleted'],200);
    }

    public function getProfile($id){
        $profile=User::find($id)->profile;
        return response()->json($profile);
    }

}

