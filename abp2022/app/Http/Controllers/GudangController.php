<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;
use DB;

class GudangController extends Controller
{
    public function index(){
        
        $gudang = DB::table('gudang')->get();

        return view("gudang.index", ['gudang' => $gudang]);
    }
    
    public function create(){
        return view("gudang.create");
    }

    public function store(Request $req){
        $new = new Gudang();
        $new->nama_gudang = $req->nama_gudang;
        $new->alamat_gudang = $req->alamat_gudang;/* nama di db = nama di formnya */
        $new->save();

        return view("gudang.create");
    }
}
