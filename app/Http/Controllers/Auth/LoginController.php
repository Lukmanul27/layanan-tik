<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return redirect('/admin')->with('success', 'Selamat Datang ' . $user->name);
        } elseif ($user->hasRole('petugas')) {
            return redirect('/petugas')->with('success', 'Selamat Datang ' . $user->name);
        } else {
            return redirect('/home')->with('success', 'Selamat Datang ' . $user->name);
        }
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()
            ->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => trans('auth.failed'),
            ])
            ->with('error', 'Email atau Password Salah');
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
