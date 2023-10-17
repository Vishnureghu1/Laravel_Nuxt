<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homePage() {
        return ["name" => "Home page"];
    }
    public function getUsers()
    {
        $users = User::all();
        return ['users' => $users ];
    }
    public function addUsers(Request $request)
    {
        $userData = $request['userObj'];

        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'date_of_birth' => $userData['date_of_birth'],
            'status' => $userData['status']
        ]);
        if ($user) {
            return response()->json(['message' => 'User created successfully', 'status' => 1], 201);
        } else {
            return response()->json(['message' => 'User creation failed'], 500);
        }
        
    }
    public function removeUser(Request $request) {
        $userId = $request->input('user_id');
        $user = User::find($userId);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }

    public function editUser(Request $request) {
       return response()->json(['message' => 'User updated successfully']);
    }
    
}
