<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    public function Create(request $request)
    {
        $user = new User;
        $user->name = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();
        Log::info('User Created');
        return back()->with('success', 'User Created');
    }
    public function show()
    {
        return view('register');
    }
    public function login(request $request)
    {
        $user = User::where('name', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('LoggedUser', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Invalid Password');
            }
        } else {
            return back()->with('fail', 'No Account Found');
        }
    }
}