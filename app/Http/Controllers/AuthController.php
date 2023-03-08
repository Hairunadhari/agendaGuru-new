<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
         $registerData = $request->validate([
            'name' => 'required','min:3','max:255','unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20',
         ]);
         $registerData['password'] = bcrypt($registerData['password']);
         User::create($registerData);
         return redirect('/login')->with('success','registrasi berhasil, silahkan login!');
    }

    public function proseslogin(Request $request){
        $loginData = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($loginData)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','Login Gagal');
    }
     
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
?>