<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
     //SESSION
     function userLogin(Request $req){
        $data =  $req->input();
        
        $req->session()->put('username',$data['username']); //vercnuma input-i anuny
        return redirect('profile');
    }
    
//FLASH SESSION

    function add(Request $req){
        $data = $req->input('username');   // input(username) tpuma anuny menak
        $req->session()->flash('username',$data);
        return redirect("sesion");
    }
}
