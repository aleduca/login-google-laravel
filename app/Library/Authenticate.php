<?php

namespace App\Library;

use App\Models\User;

class Authenticate
{
    public function authGoogle($data)
    {
        $user = new User;
        $userFound = $user->where('email', $data->email)->first();
        if (!$userFound) {
            $user->insert([
                'firstName' => $data->givenName,
                'lastName' => $data->familyName,
                'email' => $data->email,
                'avatar' => $data->picture,
            ]);
        }

        // $_SESSION['user'] = $userFound;
        // $_SESSION['logged'] = true;

        session()->put('user', $userFound);
        session()->put('auth', true);

        return redirect()->to('/');
    }

    public function logout()
    {
        unset($_SESSION['user'], $_SESSION['logged']);
    }
}
