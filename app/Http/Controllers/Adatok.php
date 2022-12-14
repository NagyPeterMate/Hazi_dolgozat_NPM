<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adatok extends Controller
{
    public function adatok(){
        return view("adatok");
    }
    public function form(){
        return view("form");
    }
    public function rogzites(Request $req){
        $req->validate(
            [
                "vezetéknév"=>"required|min:3|max:150",
                "keresztnév"=>"required|min:3|max:150",
                "szul_ev"=>"required",
            ],
            [
                "vezetéknév.required"=>"A mező kitöltése kötelező!",
                "vezetéknév.min"=>"Minimum 3 karaktert adj meg!",
                "vezetéknév.max"=>"Maximum 150 karaktert adj meg!",

                "keresztnév.required"=>"A mező kitöltése kötelező!",
                "keresztnév.min"=>"Minimum 3 karaktert adj meg!",
                "keresztnév.max"=>"Maximum 150 karaktert adj meg!",

                "szul_ev.required"=>"A mező kitöltése kötelező!"

            ]);
            DB::insert("INSERT INTO adatok ( vezeteknev, keresztnev, szul_ev) VALUES (?,?,?)",[$req->get('vezetéknév'),$req->get('keresztnév'),$req->get('szul_ev')]);

            return redirect("/form")-> with("Kész", "Az adat bevitel sikeres");
    }
}
