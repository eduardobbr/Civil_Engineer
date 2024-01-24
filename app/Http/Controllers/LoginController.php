<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('user');
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid username or password');
    }
}
