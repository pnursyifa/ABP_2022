<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product,
    Customer,
};
use DB;

class CustomerController extends Controller
{
    public function index(){
        
        $customer = DB::table('customer')->get();

        return view("customer.index", ['customer' => $customer]);
    }

    public function show($id) {
        return view("customer.show", ['data_customer' => Customer::findOrFail($id)]);
    }

    public function create() {
        return view("customer.create", ['title' => 'Tambah',
                                        'method'=> 'POST',
                                        'action'=> "/customer"]);
    }

    public function store(Request $req){
        $new = new Customer();
        $new->nama_customer = $req->nama_customer;
        $new->alamat_customer = $req->alamat_customer;
        $new->no_hp = $req->no_hp;/* nama di db = nama di formnya */
        $new->save();

        return redirect('customer');
    }

    public function edit($id) {
        return view('customer.create', ['title' => 'Edit',
                                        'method'=> 'PUT',
                                        'action'=> "/customer/$id",
                                        'data_customer' => Customer::findOrFail($id)]);
    }

    public function update(Request $req, $id){
        $customer = Customer::findOrFail($id);
        $customer->nama_customer = $req->nama_customer;
        $customer->alamat_customer = $req->alamat_customer;
        $customer->no_hp = $req->no_hp;
        $customer->save();

        return redirect('customer');
    }

    public function destroy($id) {
        
        Customer::destroy($id);
        return redirect('customer');
    }
}
