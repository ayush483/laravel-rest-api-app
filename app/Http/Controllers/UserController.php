<?php

// app/Http/Controllers/UserController.php

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

public function createUser(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return response()->json($user);
}

public function getUserInfo()
{
    return response()->json(Auth::user());
}
