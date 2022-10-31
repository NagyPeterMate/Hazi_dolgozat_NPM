<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adatok;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/adatok',function(){
    return view("adatok");
});

Route::get('/form',[Adatok::class, "form"]);
Route::post('/form',[Adatok::class, "rogzites"]);