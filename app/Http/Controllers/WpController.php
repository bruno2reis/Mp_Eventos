<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WpController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
