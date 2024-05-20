<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function registerPage()
    {
        return view('auth.register-page');
    }
    public function storeUser(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => "0"
        ]);

        return redirect()->route('auth.login-page')->with('message', 'User created successfully');
    }
    public function loginPage()
    {
        return view('auth.login-page');
    }
    public function loginAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::where('email', $request->input('email'))->first();

        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')]
            ]);
        }

        auth()->login($user);

        $request->session()->regenerate();

        if (auth()->user()->type == 'admin') {
            return redirect()->route('homepage.admin-dashboard');
        } else {
            return redirect()->route('homepage.user-profile');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login-page');
    }
}
