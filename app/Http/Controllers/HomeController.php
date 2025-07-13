<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalProducts = \App\Models\Product::count();
        $totalUsers = \App\Models\User::count();
        

        return view('admin.dashboard', compact('totalProducts', 'totalUsers'));
    }
}