<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     * personels.index.blade.php
     */
    public function show(string $id)
    {
        
      
        return view('personels.index');
    }
}