<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoTabl;

class UserController extends Controller
{
    public function webView(){
        return view('todo');
    }
    public function data_save(Request $request){
        
        $to = new TodoTabl();
        $to->name=$request->name;
        $to->description=$request->description;
        $to->date=$request->date;

        $to->save();
        return redirect('listview');
    }
    public function list_view(){
        $data = array();
        $data['list'] = TodoTabl::all();
        return view('/list',$data);
    }
    public function dld_todo($id){
        $dld = TodoTabl::find($id);
        $dld->delete();
        return redirect('listview');
    }

    public function show($id){

        $data = array();

        $data['data'] = TodoTabl::find($id);   
        return view('edit', $data);    
    }
    
    public function edit_todo(Request $request)
    {
        $up = TodoTabl::find($request->id);
        $up->name=$request->name;
        $up->description=$request->description;
        $up->date=$request->date;
        
        $up->update();
        return redirect('listview');
    }   
}
