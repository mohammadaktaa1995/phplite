<?php


namespace App\Controllers;


use App\Models\User;

class HomeController
{
    public function index()
    {
        return view('index');
    }
}