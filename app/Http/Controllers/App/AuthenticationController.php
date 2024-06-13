<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    use \Illuminate\Foundation\Auth\AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Show login form for organization.
     *
     * @return View
     */
    public function showLoginForm()
    {
        // If User is Logged in, Redirect to Dashboard
        if (\Auth::check()) {
            return redirect()->route('app.home', [
                activeSlug(),
            ]);
        }

        return view('auth.login');
    }

    /**
     * Authenticate user.
     *
     * @return View
     */
    public function login()
    {
        $this->validate(request(), [
            'email'     => 'required|max:255|email',
            'password'  => 'required',
        ]);

        $credentials = [
            'email'             => request()->email,
            'password'          => request()->password,
            'koperasi_id'       => activeKoperasi()->id,
        ];
        if (\Auth::attempt($credentials)) {
            return redirect()->route('app.home', [
                activeSlug(),
            ]);
        } else {
            return redirect()->back()->withErrors([
                __('auth.failed'),
            ]);
        }
    }

    /**
     * Logout User and Redirect to Login page.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function logout(Request $request)
    {
        $this->performLogout($request);

        return redirect()->route('app.login', [
            activeSlug(),
        ]);
    }
}
