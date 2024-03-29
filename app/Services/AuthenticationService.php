<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Authenticationservice
{
    public static function login($email, $password)
    {
        $url = env('AUTH_API_URL');
        $token = env('AUTH_API_TOKEN');
        $cookieFile = base_path('cookie.txt');

        // Ler o valor do cookie do arquivo e remover espaços em branco
        $cookie = trim(file_get_contents($cookieFile));

        $response = Http::withHeaders([
            'Authorization' => $token,
            'Cookie' => $cookie,
        ])->post($url, [
            'email' => $email,
            'password' => $password,
        ]);

        return $response->json();
    }
}
