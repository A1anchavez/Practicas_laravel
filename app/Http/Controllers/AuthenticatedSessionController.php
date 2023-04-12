<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Mail;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email'=>['required', 'string', 'email'],
            'password'=>['required','string'],
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember')))
        {
            throw ValidationException::withMessages([
                'email'=> 'Correo no valido'
            ]);  
        }
        $request->session()->regenerate();

        Mail::to('a1anchavez@hotmail.com')->send(new MessageReceived);

        return redirect()->intended()->with('status', 'Iniciaste sesion');
    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status','Cerraste sesion');
    }
}
