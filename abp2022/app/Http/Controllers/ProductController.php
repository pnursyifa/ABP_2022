<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\{
    Product,
    Gudang,
    Brand,
};
use DB;

class ProductController extends Controller {
    public function index(){
        $product = Product::all();

        return view("product.index", ['product' => $product]);
    }

    public function show($id) {
        $product = Product::all();

        return view("product.show", ['product' => $product,
                                     'd' => Product::findOrFail($id)]);
    }

    public function create(){
        $gudang = DB::table('gudang')->get();

        $brand = DB::table('brand')->get();

        return view("product.create", ['gudang' => $gudang,
                                        'brand' => $brand,
                                        'title' => 'Tambah',
                                        'method'=> 'POST',
                                        'action'=> "/product"]);
    }

    public function store(Request $req){
        $gudang = DB::table('gudang')->get();

        $brand = DB::table('brand')->get();

        $new = new Product();
        $new->nama_product = $req->nama_product;
        $new->stock = $req->stock; /* nama di db = nama di formnya */
        $new->gudang_id = $req->gudang;
        $new->brand_id = $req->merk;
        $new->harga_product = $req->harga_product;
        $new->save();
        
        return redirect('/product');
    }

    public function edit($id) {
        $gudang = DB::table('gudang')->get();

        $brand = DB::table('brand')->get();
        
        return view("product.create", ['gudang' => $gudang,
                                        'brand' => $brand,
                                        'title' => 'Edit',
                                        'method'=> 'PUT',
                                        'action'=> "/product/$id",
                                        'd' => Product::findOrFail($id)]);
    }

    public function update(Request $req, $id) {
        $gudang = DB::table('gudang')->get();

        $brand = DB::table('brand')->get();

        $product = Product::findOrFail($id);
        $product->nama_product = $req->nama_product;
        $product->stock = $req->stock;
        $product->gudang_id = $req->gudang;
        $product->brand_id = $req->merk;
        $product->harga_product = $req->harga_product;
        $product->save();
        
        return redirect('product');

    }

    public function destroy($id) {
        Product::destroy($id);
        return redirect('product');
    }

}