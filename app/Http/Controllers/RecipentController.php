<?php

namespace App\Http\Controllers;


use App\Models\interns;
use App\Models\Recipents;
use App\Models\Guests;
use App\Models\Guns;
use App\Models\Cars;
use App\Models\Weekend;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;


class RecipentController extends Controller
{

    // show recipant
      Public function recipient() {
        return view('recipents.recipient',['recipents'=> auth()->user()->recipents()->filter
        (request(['search']))->paginate(6)]);
}
    //show dashboard
     public function dashboard(){
         $totalemps=Recipents::count();
        $totalints=interns::count();
        $totalguests=Guests::whereDate('created_at', Carbon::today())->count();
        $totalguns=Guns::whereDate('created_at', Carbon::today())->count();
        $totalcars=Cars::whereDate('created_at', Carbon::today())->count();
        $totalweekenders=Weekend::count();



        return view('users.dashboard',compact('totalemps','totalints','totalguests','totalguns','totalcars','totalweekenders'));
     }
        //show recipants
     public function q(){
        return view('recipents.recipient');
    }
    //show create form
    public function create(){
        return view('recipents.addr');
    }
    // store Recipents data
    public function store(Request $request)
    {

    //    dd($request->all());
          $formFields = $request -> validate(
            [
                'fname'=>'required',
                'lname' => 'required',
                'id_number' => ['required',Rule::unique('recipents','id_number')],
                // 'website' => 'required',                          //table    //colum
                // 'email' => ['required','email',Rule::unique('recipents','lname')],
                // 'tags' => 'required',
                'job_position' => 'required',
                'user_name'=>'required',
                'password' => 'required'
            ]
            );
            // if($request ->hasFile('logo')){
            //     $formFields['logo']=$request->file('logo')->store('logos','public');
            // }

            $formFields['user_id'] = auth()->id();
                Recipents::create($formFields);

                // hash password
            $formFields['password'] = bcrypt($formFields['password']);
                //Session::flash('message','Recipent created or what ever we want');

            return redirect('/Recipents/recipient')->with('message','Recipient Added successfully!');
    }
       //show edit form
    public function edit(Recipents $Recipent){
       return view('recipents.edit',['Recipent' => $Recipent]);
   }

        //update  Recipent data
        public function update(Request $request, Recipents $Recipent)
    {
    //    dd($request->all());

    // make sure logged in user is owner
    if($Recipent->user_id != auth()->id())
    {
        abort(403,'Unauthorized Action');
    }
          $formFields = $request -> validate(
            [
                'fname'=>'required',
                'lname' => 'required',
                'id_number' => 'required',
                'job_position' => 'required',
                'user_name'=>'required'
            ]
            );

                $Recipent -> update($formFields);

                //Session::flash('message','Recipent created or what ever we want');

            return redirect('/Recipents/recipient')->with('message','Recipient updated successfully!');
    }

    // Delete Recipent
    public function destroy(Recipents $Recipent)
    {
        // make sure logged in user is owner
    if($Recipent->user_id != auth()->id())
    {
        abort(403,'Unauthorized Action');
    }
         $Recipent->delete();
         return redirect('/Recipents/recipient')->with('message','Recipient deleted successfully ');
    }



}
