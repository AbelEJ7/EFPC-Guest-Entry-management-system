<?php

namespace App\Http\Controllers;
use App\Models\Weekend;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;

class WeekendController extends Controller
{

     public function showStaff(){

        return view('Weekendstaff.staff',['weekends'=> auth()->user()->weekends()->filter
        (request(['search']))->paginate(6)]);
     }
     // show store page
public function view(){
   return view('Weekendstaff.add');
}
public function store(Request $request)
    {
    //    dd($request->all());
          $formFields = $request -> validate(
            [
                'fname'=>'required',
                'lname' => 'required',
                'id_number' => 'required',
                'assigned_date' => 'required',
                // 'website' => 'required',                          //table    //colum
                // 'email' => ['required','email',Rule::unique('listings','lname')],
                // 'tags' => 'required',
                'job_position' => 'required'
            ]
            );
            // if($request ->hasFile('logo')){
            //     $formFields['logo']=$request->file('logo')->store('logos','public');
            // }

            $formFields['user_id'] = auth()->id();
                Weekend::create($formFields);

                //Session::flash('message','listing created or what ever we want');

            return redirect('weekendstaff/staff');
    }

   //show weekend edit form
    public function edit(Weekend $weekend){
       return view('weekendstaff.edit',['weekend' => $weekend]);
   }
   //
   public function update(Request $request, Weekend $weekend)
    {
    //    dd($request->all());

    // make sure logged in user is owner
    if($weekend->user_id != auth()->id())
    {
        abort(403,'Unauthorized Action');
    }
          $formFields = $request -> validate(
            [
                'fname'=>'required',
                'lname' => 'required',
                'id_number' => 'required',
                'assigned_date' => 'required',
                'job_position' => 'required'
            ]
            );

                $weekend -> update($formFields);

                //Session::flash('message','listing created or what ever we want');

            return redirect('/weekendstaff/staff')->with('message','staff updated successfully!');
    }
    // Delete weekend
    public function destroy(weekend $weekend)
    {
        // make sure logged in user is owner
    if($weekend->user_id != auth()->id())
    {
        abort(403,'Unauthorized Action');
    }
         $weekend->delete();
         return redirect('/weekendstaff/staff')->with('message','staff deleted successfully ');
    }

    protected $table='weekends';
}
