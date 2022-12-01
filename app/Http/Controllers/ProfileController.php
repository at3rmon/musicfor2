<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit')->with([
            'departments' => Auth::user()->departments()->get(),
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        Auth::user()->update($request->only('first_name', 'last_name'));

        return redirect(route('profile.edit'))->with(['success' => 'User info was updated']);
    }
}
