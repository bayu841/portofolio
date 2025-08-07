<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Cek peran pengguna setelah login
            $role = Auth::user()->role;

            if ($role == 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect ke halaman admin
            }

            return redirect()->route('user.dashboard'); // Redirect ke halaman user
        }

        return Redirect::back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Untuk logout
    public function destroy(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
}
