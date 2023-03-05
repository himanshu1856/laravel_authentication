<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function register_view(){
        return view("auth.register");
    }
}
