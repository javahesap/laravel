<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// app/Http/Controllers/UsersController.php





class UsersController extends Controller
{
    public function show()
    {
        return view('users.show');
    }
}

