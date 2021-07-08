<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// custom
Use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    public function login(Request $request) {

            // return $request->input();
            // return User::where('email',$request->email)->first();

            $user = User::where('email',$request->email)->first();

            if(!$user || !Hash::check($request->password, $user->password)) {

                return "Credentilas does not match";
            }else {

                $request->session()->put('user',$user);
                return redirect("/");
            }
    } 
}
