<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function redirect()
    {
        return view('auth.login');
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.login');
        // if attempt to login is successful, redirect to dashboard if to much attempt redirect to home 
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        } else {
            return redirect('/home');
        }
        


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreloginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloginRequest $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
