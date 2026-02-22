<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        // এখানে আপনার রোল অনুযায়ী লজিক লিখুন
        if ($user->role === 'admin') {
            return redirect()->intended(route('admin_dashboard'));
        }elseif ($user->role === 'user') {
            return redirect()->intended(route('dashboard'));
        }

        // return redirect()->intended(route('dashboard'));
    }
}