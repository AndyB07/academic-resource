<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userAuthentication extends Controller{


  public function authentication(Request $request) {
    $data = $request->validate([
        'email' => ['required','email','unique:users'],
        'name' => 'required|min:2|max:55',
        'password' => 'required|min:8|max:15|confirmed',
        // 'password_confirmation' => 'required|same:password',
    ]);

    User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    return redirect('/login')->with('success', 'Registration successful! Please login.');
  }
   public function login(Request $request){
    $data=$request->validate([
        'email' => ['required','email'],
        'password' => 'required|min:8|max:15',
    ]);
    if(Auth::attempt($data)){
        $request->session()->regenerate();
       
        return redirect('/');
    }
    return back(); 
}
}
