<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        return view("order.index");
    }

    public function store(Request $req){
        $new = new Order();
        $new->nama_merk = $req->nama_brand;/* nama di db = nama di formnya */
        $new->save();


        return $new;
    }

    
}
