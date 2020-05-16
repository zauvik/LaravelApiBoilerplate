<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login($user, $requestPassword)
    {
        if ($user) {
            $authenticate = Hash::check($requestPassword, $user->password);
            if ($authenticate) {
                $token = $user->createToken('My Token');
                $user->token = $token->accessToken;
                return ngcApiReturn($user);
            } else return ngcApiException(null, 'Authentication failed, please check your email or password');
        } else
            return ngcApiException(null, 'Authentication failed, please check your email or password');
    }

    public function register($user){
        $token = $user->createToken('My Token');
        $user->token = $token->accessToken;
        return ngcApiReturn($user);
    }
}
