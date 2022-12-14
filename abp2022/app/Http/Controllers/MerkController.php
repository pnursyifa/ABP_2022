<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product,
    Gudang,
    Brand,
};
use DB;

class MerkController extends Controller
{
    public function index(){
        $brand = DB::table('brand')->get();

        return view("merk.index", ['brand' => $brand]);
    }

    public function show($id) {
        
        $total_product = Product::where('brand_id', $id)->sum('stock');
        $total_gudang = Product::where('brand_id', $id)->count('gudang_id');

        return view("merk.show", ['data_brand' => Brand::findOrFail($id),
                                 'total_product' => $total_product,
                                 'total_gudang' => $total_gudang]);
    }

    public function create(){

        return view("merk.create", ['title' => 'Tambah',
                                    'method'=> 'POST',
                                    'action'=> "/merk"]);
    }

    public function store(Request $req){
        $new = new Brand();
        $new->nama_brand = $req->nama_brand;/* nama di db = nama di formnya */
        $new->save();
        
        return redirect('merk');
    }

    public function edit($id) {
        return view('merk.create', ['title' => 'Edit',
                                    'method' => 'PUT',
                                    'action' => "/merk/$id",
                                    'data_brand' => Brand::findOrFail($id)]);
    }

    public function update(Request $req, $id){
        $brand = Brand::findOrFail($id);
        $brand->nama_brand = $req->nama_brand;
        $brand->save();

        return redirect('merk');
    }

    public function destroy($id) {
        Brand::destroy($id);
        
        return redirect('merk');
    }
}
