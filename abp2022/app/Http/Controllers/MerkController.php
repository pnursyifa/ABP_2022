<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class MerkController extends Controller
{
    public function index(){
        return view("merk.index");
    }

    public function create(){
        return view("merk.create");
    }

    public function store(Request $req){
        $new = new Brand();
        $new->nama_merk = $req->nama_brand;/* nama di db = nama di formnya */
        $new->save();
        
        return $new;
    }
}
