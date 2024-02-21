<?php

namespace App\Http\Controllers;

use App\Services\Authenticationservice;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Obter o e-mail e a senha dos dados enviados na requisição
        $email = $request->input('email');
        $password = $request->input('password');

        // Chamar o método login() da classe AuthenticationService passando o e-mail e a senha
        $response = AuthenticationService::login($email, $password);

        // Faça o que for necessário com a resposta da API

        dd($response);
    }
}
