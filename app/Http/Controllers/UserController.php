<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
     
        
    
        if(auth()->attempt(request()->only(['username','password']))){
            $user = User::where('username','=',$fields['username'])->first()->get();
            $token = $user[0]->createToken('myAppToken')->plainTextToken;
            session(['bearer' => $token]);
           return  redirect()->route('/');
            }
           return back()->withErrors(
            [
                'invalid' => 'Username and password doesn\'t match any user'
            ]
        );
    }
}
