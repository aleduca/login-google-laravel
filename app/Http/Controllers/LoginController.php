<?php

namespace App\Http\Controllers;

use App\Library\Authenticate;
use App\Library\GoogleCLient;

class LoginController extends Controller
{
    public function index()
    {
        $googleClient = new GoogleClient;
        $googleClient->init();

        if ($googleClient->authenticated()) {
            $auth = new Authenticate();

            return $auth->authGoogle($googleClient->getData());
        }

        return view('login', ['authUrl' => $googleClient->generateLink()]);
    }

    public function store()
    {
    }
}
