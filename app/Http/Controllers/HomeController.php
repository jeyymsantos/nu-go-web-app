<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->firestoreDB->collection('users')->add([
            'name' => 'Jeyym Santos',
            'email' => 'jeyym',
        ]);

        return view('home');
    }
}
