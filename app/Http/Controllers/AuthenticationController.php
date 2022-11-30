<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function create(AuthenticationRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors([
                'email' =>  __('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
