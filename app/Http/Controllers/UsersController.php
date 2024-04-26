<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Index()
    {
        $users = User::all();
        return view('admin.users.list')->with('users', $users);
    }
}
