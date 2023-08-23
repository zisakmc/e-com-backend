<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {

        $credencial = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8'
        ]);

        if (Auth::attempt($credencial)) {

            $request->session()->regenerateToken();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'the given email or password not match in our record',
        ])->onlyInput('email');
    }
}
