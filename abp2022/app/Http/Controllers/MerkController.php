<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use DB;
use App\Http\Controllers\Redirect;

class MerkController extends Controller
{
    public function index(){
        $brand = DB::table('brand')->get();

        return view("merk.index", ['brand' => $brand]);
    }

    public function create(){
        return view("merk.create");
    }

    public function store(Request $req){
        $new = new Brand();
        $new->nama_brand = $req->nama_brand;/* nama di db = nama di formnya */
        $new->save();
        
        return redirect('merk');
    }
}
