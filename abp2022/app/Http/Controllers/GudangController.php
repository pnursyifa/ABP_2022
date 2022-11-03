<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product,
    Gudang,
    Brand,
};
use DB;

class GudangController extends Controller
{
    public function index(){
        
        $gudang = DB::table('gudang')->get();

        return view("gudang.index", ['gudang' => $gudang]);
    }
    
    public function show($id) {
    
        $product_gudang = Product::where('gudang_id', $id)->get();
        $total_stock = Product::where('gudang_id', $id)->sum('stock');

        return view("gudang.show", ['data_gudang' => Gudang::findorFail($id),
                                    'product_gudang' => $product_gudang,
                                    'total_stock' => $total_stock]);
    }

    public function create(){

        return view("gudang.create", ['title' => 'Tambah',
                                      'method'=> 'POST',
                                      'action'=> "/gudang"]);
    }

    public function store(Request $req){
        $new = new Gudang();
        $new->nama_gudang = $req->nama_gudang;
        $new->alamat_gudang = $req->alamat_gudang;
        $new->save();

        return redirect('gudang');
    }

    public function edit($id) {
        return view('gudang.create', ['title' => 'Edit',
                                      'method'=> 'PUT',
                                      'action'=> "/gudang/$id",
                                      'data_gudang'     => Gudang::findOrFail($id)]);
    }

    public function update(Request $req, $id){
        $gudang = Gudang::findOrFail($id);
        $gudang->nama_gudang = $req->nama_gudang;
        $gudang->alamat_gudang = $req->alamat_gudang;
        $gudang->save();

        return redirect('gudang');
    }

    public function destroy($id) {
        
        Gudang::destroy($id);
        return redirect('gudang');
    }
}
