<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class dashboardController extends Controller
{
    public function index(){
        return view('home');
    }
}
