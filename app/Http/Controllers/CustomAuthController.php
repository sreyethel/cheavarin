<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function loginUser(Request $request){

         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if (Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('app');
            }else{
                return back()->with('failPassword','The password not matches');
            }
        }
        else{
            return back()->with('failEmail','The email is does not exist');
        }
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
           return  redirect('/');
        }
    }
}
