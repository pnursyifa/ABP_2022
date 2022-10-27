<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function index(){
        return view("merk.index");
    }
}
