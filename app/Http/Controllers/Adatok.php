<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adatok extends Controller
{
    public function adatok(){
        return view("adatok");
    }
    public function form(){
        return view("form");
    }
}
