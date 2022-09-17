<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
     public function showsettings(){
        return view('settings.Settings');
}

//    //update  admin data
//    public function update(Request $request, interns $intern)
//    {
//    //    dd($request->all());

//    // make sure logged in user is owner
//    if($intern->user_id != auth()->id())
//    {
//        abort(403,'Unauthorized Action');
//    }
//          $formFields = $request -> validate(
//            [
//                'fname'=>'required',
//                'lname' => 'required',
//                'role' => 'required',
//                'school' => 'required',
//                'supervisor'=> 'required',
//                'School_id'=>'required'
//            ]
//            );
//            if($request ->hasFile('photo')){
//                $formFields['photo']=$request->file('photo')->store('photos','public');;
//            }

//                $intern -> update($formFields);

//                //Session::flash('message','listing created or what ever we want');

//            return redirect('/interns/intern')->with('updatt','Intern updated successfully!');
//    }






}
