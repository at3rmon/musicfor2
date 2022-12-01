<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(ProfileUpdateRequest $request)
    {
        User::find(Auth::id())->update($request->only('first_name', 'last_name'));
        return redirect(route('profile.edit'))->with(['success' => 'User info was updated']);
    }
}
