<?php

namespace App\Services;

class AuthService
{
    public function __construct()
    {
        //
    }


    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!auth()->attempt($credentials)) {
            return redirect()->back()->with('error', 'Authentication failed');
        }

        return 'success';
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->back()->with('success', 'Logged out');
    }

}
