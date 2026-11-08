<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('panel.auth.signin', [
            'pageTitle' => 'Sign In'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
                'is_active' => 1,
                'is_del' => 0,
            ])
        ) {
            $request->session()->regenerate();
            return redirect()->route('panel.dashboard');
        }

        return back()
            ->withInput()
            ->with('error', 'Invalid email or password.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
