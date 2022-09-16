<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use App\Images;
use Image;
use App\Models\interns;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\intern as ControllersIntern;

class InternController extends Controller
{
   // show intern page

         public function intern_show(){

            return view('interns.intern',['interns'=> auth()->user()->interns()->filter
        (request(['search']))->paginate(11)]);

         }
         // show store page
public function view(){
   return view('interns.addi');
}
         // store intern

         public function store(Request $request)
    {
    //    dd($request->all());
          $formFields = $request -> validate(
            [
                'fname'=>'required',
                'lname' => 'required',
                'role' => 'required',

                // 'website' => 'required',                          //table    //colum
                // 'email' => ['required','email',Rule::unique('listings','lname')],
                // 'tags' => 'required',
                'school' => 'required',
                'supervisor' => 'required',
                'School_id'=>['required',Rule::unique('interns','School_id')],
                'phone'=>'required'

            ]
            );
            if($request ->hasFile('photo')){
                $formFields['photo']=$request->file('photo')->store('photos','public');;
            }

            $formFields['user_id'] = auth()->id();
                interns::create($formFields);

                Session::flash('message','listing created or what ever we want');

            return redirect('/interns/intern')->with('message','Intern added successfully!');
    }
    //show intern edit form
    public function edit(interns $intern){
       return view('interns.editintern',['intern' => $intern]);
   }
   //update  intern data
        public function update(Request $request, interns $intern)
    {
    //    dd($request->all());

    // make sure logged in user is owner
    if($intern->user_id != auth()->id())
    {
        abort(403,'Unauthorized Action');
    }
          $formFields = $request -> validate(
            [
                'fname'=>'required',
                'lname' => 'required',
                'role' => 'required',
                'school' => 'required',
                'supervisor'=> 'required',
                'School_id'=>'required'
            ]
            );
            if($request ->hasFile('photo')){
                $formFields['photo']=$request->file('photo')->store('photos','public');;
            }

                $intern -> update($formFields);

                //Session::flash('message','listing created or what ever we want');

            return redirect('/interns/intern')->with('updatt','Intern updated successfully!');
    }
    // delet intern
    public function destroy(interns $intern)
    {
        // make sure logged in user is owner
    if($intern->user_id != auth()->id())
    {
        abort(403,'Unauthorized Action');
    }
         $intern->delete();
         return redirect('/interns/intern')->with('errorr','Intern deleted successfully ');
    }



}
