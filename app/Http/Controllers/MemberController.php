<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Member;

class MemberController extends Controller
{
    function show(){

        // $data = Member::all(); //bolory cuyca talis
        $data = Member::paginate(5);
    //    return  DB::select("select * from member"); //chor devov nshumes
        return view('list',['members'=>$data]);
    }

    function addData(Request $req){
        $req->validate([
            'name'=>'required | max:7',
            'email'=>'required ',
            'address'=>'required | max:15',

        ]);
        $member = new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('list');
    }


    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }

    function edit($id){
        $data = Member::find($id);
        return view('edit',['data'=>$data]);

    }
    function update(Request $req){
        $req->validate([
            'name'=>'required | max:7',
            'email'=>'required ',
            'address'=>'required | max:15',

        ]);
        $data = Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');
    }
}
