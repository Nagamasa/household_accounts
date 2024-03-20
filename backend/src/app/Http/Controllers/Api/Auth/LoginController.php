<?php

namespace App\Http\Controller\Api\Auth;

use App\Domain\Models\Users\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
        $user = new User('永野将志', 'nagano@test.com');
        dd($user);
    }
    
    
    // public function login(Request $request)
    // {
    //     $email = $request->email;
    //     $password = $request->password;

    //     $user = User::where('email', $email)->first();

    //     if (!$user || !Hash::check($password, $user->password)) {
    //         throw ValidationException::withMessage([
    //             'email' => ['メールが違うか、パスワードが違うか'],
    //         ])
    //     }

    //     $token = $user->createToken('token')->plainTextToken;

    //     return response()->json(compact('token'), 200);
    // }
}