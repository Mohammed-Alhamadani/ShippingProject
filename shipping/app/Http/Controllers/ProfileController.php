<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile=Profile::paginate(5);;
        return response()->json($profile);
    }
    public function show($id){
        $user=Profile::find($id);
        return response()->json($user);
    }

    public function store(StoreProfileRequest $request){
        $user=Profile::create($request->validated());
        return response()->json($user);
    }
    public function update(UpdateProfileRequest $request,$id){
        $user=Profile::find($id);
        $user->update($request->validated());
        return response()->json($user);
    }
    public function destroy($id){
        $user=Profile::find($id);
        $user->delete();
        return response()->json(['message'=>$user->full_name.' '.'has been deleted'],200);
    }
}
