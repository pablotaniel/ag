<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Polizas extends Controller
{
    public function generar(Request $req){
        print_r($req->input());
    }
}
