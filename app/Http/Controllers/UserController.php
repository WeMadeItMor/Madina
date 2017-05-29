<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('admin/user/login');
    }

    //fonction connexion

    public function signin(Request $request)
    {
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){
            return redirect()->route('adminhome');
        }
        return redirect()->back()->with("error", "Entrer les bon crédentials");

    }


    //fonction deconnexion

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }

    //fonction creer utilisateur

    public function register(Request $request)
    {
        $this->validate($request,[
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);
        return redirect()->route('adminhome');
    }


}
