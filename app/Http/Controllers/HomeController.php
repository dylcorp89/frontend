<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    //

    public function index(){
        return view('front.home');
    }

    public function login(){
        return view("front.login");
    }

    public function login_post(){
        return view("backoffice.index");
    }
}
