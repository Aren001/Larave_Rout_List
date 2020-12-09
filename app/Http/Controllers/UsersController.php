<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    function viewload(){

        $data = ['ara','gago','rado','sara'];
        return view('operators',['user'=>$data]);
        // return view('operators',['user'=>'ara']);//if-i hamara ogtagorcvac
    }
    function getData(Request $req){

        $req->validate([
            'username'=>'required | max:10',
            'password'=>'required | min:5'
        ]);

        echo "Data view";
        return   $req->input();
    }

    //DATABASE

    function index(){
        return DB::select("select * from users");//fetch data
    }

    // HTTP client

    function client(){
        $array = HTTP::get("https://reqres.in/api/users?page=1 ");
        return view('client',['arr'=>$array['data']]); //data-n zangvaci anunna
    }

    //HTTP REQUEST Test
    function testRequest(Request $req){
        return $req->input();
    }


    //file UPLOAD
    function uploadFi(Request $req){
        return $req->file('files')->store('docs'); //  file(name) vercnum inputi
    }

    

   
    
    
}
