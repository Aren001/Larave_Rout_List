<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function home()
    {
        $a = 'HELLO VARIABLES';
        return view('welcome', compact('a'));
        // return redirect("about");//sra hamarela gnum about
    }



    public function about($user){ //2-r page-n

        echo $user;
        return view('about',['name'=>$user]); //aranc popoxakan file-i anunna  //zangvaci index-ica kaxvac popoxakani anuny
        
    }
    public function contact(){ //2-r page-n
        return view('contact'); //aranc popoxakan
    }
    
}
