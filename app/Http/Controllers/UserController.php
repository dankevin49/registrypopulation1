<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $userCount = User::count();

        return view('users.index', [
            'userCount' => $userCount
        ]);
    }
}
