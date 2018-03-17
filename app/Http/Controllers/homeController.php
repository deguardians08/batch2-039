<?php

namespace App\Http\Controllers;

use App\barang;

class homeController extends Controller
{
    public function getHome(){
    	$barang = barang::all();
    	dd($barang);
    	return view('welcome');
    }
}
