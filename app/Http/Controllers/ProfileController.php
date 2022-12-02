<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @return View
     */
    public function edit(): View
    {
        return view('profile.edit')->with([
            'departments' => Auth::user()->departments()->get(),
        ]);
    }

    /**
     * @param  UpdateProfileRequest  $request
     * @return RedirectResponse
     */
    public function update(UpdateProfileRequest $request): RedirectResponse
    {
        Auth::user()->update($request->only('first_name', 'last_name'));

        return redirect(route('profile.edit'))->with(['success' => 'User info was updated']);
    }
}
