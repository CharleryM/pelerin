<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return response()->json(['users' => $users]);
    }

    public function createUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        return response()->json(['user' => $user], 201);
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->validate([
            'password' => 'required|string|min:6',
        ]);

        $data['password'] = Hash::make($data['password']);

        $user->update($data);

        return response()->json(['message' => 'Password updated successfully']);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }

}