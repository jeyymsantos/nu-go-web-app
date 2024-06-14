<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $firestoreDB;

    public function __construct()
    {
        $this->firestoreDB = app('firebase.firestore')->database();
    }
}
