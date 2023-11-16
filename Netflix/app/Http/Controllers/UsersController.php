<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function loginPage() 
    {
        return View('Users.loginPage');
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

    }
}
