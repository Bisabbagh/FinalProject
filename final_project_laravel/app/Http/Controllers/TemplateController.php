<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('home');
    }
    public function serves(){
        return view('frontend.serves');
    }
    public function admin(){
        return view('admindashboard');
    }
    public function table(){
        return view('table');
    }
}
