<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;



class UserController extends Controller
{
    public function save(request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            $request->session()->put('LoggedUser', $user->id);
            $request->session()->put('LoggedUserName', $user->name);
            $request->session()->put('LoggedUserRole', $user->role);
            return redirect('/')->with('message', 'Nieuwe gebruiker aangemaakt');
        } else {
            return back()->with('message', 'Er is iets mis gegaan, probeer het later opnieuw');
        }
       
    }

    public function login(request $request)
    {
        $user = User::where('name', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('LoggedUser', $user->id);
                $request->session()->put('LoggedUserName', $user->name);
                $request->session()->put('LoggedUserRole', $user->role);
                if ($user->role == 'admin') {
                    return redirect('/dashboard/index');
                }else{
                    return redirect('/');
                }
            } else {
                
                return back()->with('message', 'Invalid Password');
            }
        } else {
            return back()->with('message', 'No Account Found');
        }
    }
    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            session()->pull('LoggedUserName');
            session()->pull('LoggedUserRole');
            return redirect('login');
        }
    }
    public function show()
    {
        $users = User::all();
        return view('dashboard/users', ['users' => $users]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard/users/edit', ['user' => $user]);
    }
    public function update(request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('UserDashboard')->with('message', 'Gebruiker aangepast');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('UserDashboard')->with('message', 'Gebruiker verwijderd');
    }
}