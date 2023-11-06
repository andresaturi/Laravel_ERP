<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    public function auth(Request $request){
        
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ],[
            'email.required' => 'O E-mail é Obrigatório',
            'email.email' => 'O e-mail não é válido',
            'pasword.required' => 'A Senha é Obrigatória'
        ]);

        if(Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        } else {
            return redirect()->back()->with('erro', 'Email ou senha inválidos');
        };
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function create() {
        return view('login.create');
    }
}