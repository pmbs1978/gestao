<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'Usuário e ou senha não válidos';
        }

        if($request->get('erro') == 2){
            $erro = 'nacessário eftuar login para aceder á página';
        }
        return view('login', ['titulo' => 'Login', 'erro' => $erro]);

    }

    public function autenticar(Request $request){
        $regras = [
            'email' => 'required | email',
            'password' => 'required'
        ];

        $feedBack = [
            // 'required' => 'O campo precisa de ser preenchido'
            'email.email' => 'O campo :attribute precisa de ser um email',
            'required' => 'O campo :attribute precisa de ser preenchido'
        ];

        $request->validate($regras, $feedBack);

        $email = $request->get('email');
        $password = $request->get('password');


        $user = new User();
        $usuario = $user->where('email', $email)->get()->first();
        // $usuario = User::where('email', $email)->where('password', $password)->get()->first();
        if(isset($usuario->name) && password_verify($password, $usuario->password)){
            session_start();
            $_SESSION['name'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            // dd($_SESSION);
            return redirect()->route('home');
        } else {
            return redirect()->route('login', ['erro' => 1]);
        }
    }

}
