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
    
    public function show($id) {
        return Gudang::findOrFail($id);
    }

    public function create(){
        return view("gudang.create", ['title' => 'Tambah',
                    'method'=> 'POST',
                    'action'=> 'store']);
    }

    public function store(Request $req){
        $new = new Gudang();
        $new->nama_gudang = $req->nama_gudang;
        $new->alamat_gudang = $req->alamat_gudang; /* nama di db = nama di formnya */
        $new->save();

        redirect('/gudang');
    }

    public function edit($id) {
        return view("gudang.create", ['title' => 'Edit',
                                        'method'=> 'PUT',
                                        'action'=> '$id',
                                        'd' => Gudang::findOrFail($id)]);
    }

    public function update(Request $req, $id){
        $gudang = Gudang::findorFail($id);
        $gudang->nama_gudang = $req->nama_gudang;
        $gudang->alamat_gudang = $req->alamat_gudang;
        $gudang->save();

        redirect('gudang');
    }

    public function destroy($id) {
        Gudang::destroy($id);
        
        return redirect('gudang');
    }
}
