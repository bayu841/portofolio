<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
      // Metode untuk menampilkan profil
      public function profile()
      {
          return view('profile', ['user' => Auth::user()]);
      }

      // Metode untuk memperbarui profil
      public function updateProfile(Request $request)
      {
          $user = Auth::user();
          $validatedData = $request->validate([

              'name' => 'required|string|max:255',
              'email' => 'required|email|max:255|unique:users,email,' . $user->id,
              'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
          ]);

    if ($request->hasFile('profile')) {
        $file = $request->file('profile');
        $filename = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('profiles', $filename, 'public');
        $validatedData['profile'] = $filePath;
    }
         $user->update($validatedData);

          return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Show the register form.
     *
     * @return \Illuminate\View\View
     */

    public function register()
    {
        return view('auth.register');
    }

    /**
     * Handle the registration logic.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerSave(Request $request)
    {
        // Validasi input
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        // Simpan data user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah berhasil mendaftar
        return redirect()->route('login')->with('success', 'Akun Anda berhasil dibuat!');
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Handle the login logic.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAction(Request $request)
    {
        // Validasi input email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Validasi login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Mengecek role pengguna setelah login
            if (Auth::user()->role === 'admin') {
                // Jika admin, arahkan ke dashboard
                return redirect()->route('dashboard');
            } elseif (Auth::user()->role === 'user') {
                // Jika user, arahkan ke halaman index
                return redirect()->route('index');
            }
        }

        // Jika login gagal
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    /**
     * Logout the user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}