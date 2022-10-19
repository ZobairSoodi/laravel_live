<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function test(){
        $data = MyModel::all();
        return view('hi', compact('data'));
    }

    public function add_page(){
        return view('add_page');
    }

    public function insert(Request $req){
        $my_model = new MyModel();
        $my_model->name = $req->name;
        $my_model->save();
        return redirect('hi');
    }
}
