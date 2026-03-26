<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show Register Form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle Registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role'=>$request->role ?? 'patient',
        ]);

        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Registered successfully!');
    }

    // Show Login Form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle Login
   public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Check role
        if ($user->role != $request->role) {
            Auth::logout();
            return back()->with('error', 'Invalid role selected');
        }

        // Redirect based on role
        switch ($user->role) {
            case 'admin':
                return redirect('/admin/dashboard');
            case 'doctor':
                return redirect('/doctor/dashboard');
            case 'patient':
                return redirect('/patient/dashboard');
            case 'receptionist':
                return redirect('/receptionist/dashboard');
            case 'nurse':
                return redirect('/nurse/dashboard');
            case 'pharmacist':
                return redirect('/pharmacist/dashboard');
            default:
                return redirect('/');
        }
    }

    return back()->with('error', 'Invalid credentials');
}

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
