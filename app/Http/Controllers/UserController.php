<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // Return pagination data into View
    public function index() {
        $users = User::paginate(10);
        return view('user', compact('users'));
    }


    // Return pagination data into JSON
    public function paginationToJson() {
        $users = User::paginate(10);
        return response()->json($users);
    }
}
