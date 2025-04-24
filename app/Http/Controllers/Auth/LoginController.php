<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        //dd($request->all());
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Retrieve authenticated user
            $user = Auth::user();

            // Check if the user's role is 'A'
            if ($user->role === 'A') {
                return redirect()->route('admin.index')->with('success', 'Login successful!');
            }

            // Redirect to dashboard if not admin
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        return back()->withErrors(['username' => 'Invalid credentials'])->withInput();
    }
}
