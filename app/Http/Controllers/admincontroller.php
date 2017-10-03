<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin;
class admincontroller extends Controller
{
    public function getHome(){
    	return view('welcome');
    }

    public function getEntry(Request $request){
    	//dd();
    	 $this->validate($request, [
          
            'email' => 'required',
            'phone' => 'required|numeric',
            
        ]);
    	return view('enter',compact('request'));
    }
     public function postEntry(Request $request){
         $this->validate($request, [
          'fname' => 'required',
          'lname' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'location' => 'required',
            'subloc' => 'required',
            'budget' => 'required',
            'config' => 'required',
        ]);
     	$entries = new admin([
                'f_name' => $request->input('fname'),
                'l_name' => $request->input('lname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'location' => $request->input('location'),
                'subloacation' => $request->input('subloc'),
                'budget' => $request->input('budget'),
                'config' => $request->input('config'),
                 ]);
     	//dd($entries);
            $entries->save();
            return redirect()->route('getHome');
    	
    }

    public function getAdmin(){
    	$en = admin::all();
    	return view('admin',compact('en'));
    }
}
