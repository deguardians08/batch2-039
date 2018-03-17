<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usercont;

class usercont extends Controller
{
    public function getnama($nama){
    	$user = usercont::where('nama',$nama)->first();
    	return 'nama anda adalah '.$user->nama;
    } 

    public function getalamat(){
    	return 'arabian night';
    }
}
