<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterContriller extends Controller
{
    public function create()
    {
        return view('frontend.auth.register');
    }
    public function store(RegistrationRequest $request)
    {
        $atribut = $request->all();

        $atribut['password'] = Hash::make($request->password);
        User::create($atribut);
        return redirect('/')->with('success', 'thanks for register');
    }
}
