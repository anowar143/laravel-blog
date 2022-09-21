<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function viewLoad()
    {
        // $user = 'Najmul';
        $data = ['Mohin', 'Najmul', 'Saiful', 'Sabuj', 'Jobayed'];
        return view('users', ['users' => $data]);
    }
}
