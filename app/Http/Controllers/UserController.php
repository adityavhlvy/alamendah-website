<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function signin() {
        return view('signin', [
            'title' => 'Sign In',
            'question' => 'Dont have account?',
            'action' => 'Sign Up Here',
            'url' => route('auth.signup')
        ]);
    }

    public function signup() {
        return view('signup', [
            'title' => 'Sign Up',
            'question' => 'Already have account?',
            'action' => 'Sign In Here',
            'url' => route('auth.signin')
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
