<?php

namespace App\Http\Controllers;

use App\Services\Authenticationservice;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $response = Authenticationservice::login();

        // Faça o que for necessário com a resposta da API

        dd($response);
    }
}
