<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function index(){
        return view("product.index");
    }

    public function create(){
        return view("product.create");
    }

    public function store(Request $req){
        $new = new Product();
        $new->nama_product = $req->nama_product;
        $new->stock = $req->stock; /* nama di db = nama di formnya */
        $new->save();

        return $new;
    }
}