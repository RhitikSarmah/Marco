<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;
use Session;

class FormController extends Controller
{
    public function submit(Request $request){
       $request->validate([
           'name' => 'required|max:30',
           'email' => 'required|max:100',
           'phone' => 'required|max:15',
           'enquiry' => 'required|max:500' 
        ]);
       $create = Form::create([
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'enquiry' => $request->enquiry
        ]);
       if($create){
            Session::flash('success','upload successful');
        }else{
            Session::flash('error','Error Found');
        }
        return redirect()->back();
    }
    public function formdata(){
        $formdata = Form::orderBy('id','desc')->get();
        return view('admin.formdata')->with('form',$formdata);
    }
}
