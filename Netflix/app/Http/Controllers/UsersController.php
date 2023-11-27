<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        $connectedUserId = Auth::id();

        return View('Users.index', compact('users', 'connectedUserId'));
    }

    public function loginPage() 
    {
        return View('Users.login');
    }

    public function login(Request $request)
    {
        $success = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($success)
            return redirect()->route('movies.index')->with('messages', "Connected successfully");
        else
            return redirect()->route('login')->withErrors(['Invalid username or password']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with(['messages', "Deconnected successfully"]);
    }
}
