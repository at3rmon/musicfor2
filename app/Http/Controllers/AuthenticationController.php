<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('auth.index');
    }

    /**
     * @param  AuthenticationRequest  $request
     * @return RedirectResponse
     */
    public function create(AuthenticationRequest $request): RedirectResponse
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors([
                'email' => __('auth.failed'),
            ])->withInput($request->only('email'));
        }

        $request->session()->regenerate();

        return redirect()->intended();
    }

    /**
     * @return RedirectResponse
     */
    public function destroy(): RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
}
