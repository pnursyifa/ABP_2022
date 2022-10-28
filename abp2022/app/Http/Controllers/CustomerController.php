<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view("customer.index");
    }

    public function store(Request $req){
        $new = new Customer();
        $new->nama_customer = $req->nama_customer;
        $new->alamat_customer = $req->alamat_customer;
        $new->no_hp = $req->no_hp;/* nama di db = nama di formnya */
        $new->save();

        return $new;
    }
}
