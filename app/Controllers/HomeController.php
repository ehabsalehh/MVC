<?php
namespace App\Controllers;

use App\Models\User;

class HomeController
{
public function index()
{
// Fetch data from the model
    $users = User::all();
// Pass data to the view
    return view('home',  compact('users'));
}
}