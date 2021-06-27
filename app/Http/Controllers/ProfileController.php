<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function show(User $user){
        return view('tweets.profile',['user'=>$user]);
    }
    public function edit(User $user){
        if(auth()->user()->isNot($user)){
            return abort('403');
        }
        return view('profile.edit',['user'=>$user]);
    }


    public function update(User $user){
    $attributes= \request()->validate([
         'username' => ['required', 'string', 'max:255','alpha_dash',Rule::unique('users')->ignore($user)],
         'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users')->ignore($user)],
         'name' => ['required', 'string', 'max:255'],
         'avatar'=>['file',],
         'password' => ['required', 'string', 'min:8', 'confirmed'],
     ]);
    if(\request('avatar')){
        $attributes['avatar']= \request('avatar')->store('avatars');

    }
    $attributes['password']=Hash::make($attributes['password']);
    $user->update($attributes);
    return redirect()->route('profile',$user->username);
    }
}
