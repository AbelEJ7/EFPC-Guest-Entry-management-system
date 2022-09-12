<?php


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RecipentController;
use App\Http\Controllers\WeekendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
                    //contlorell class
                    //all Recipent
Route::get('/', [UserController::class,'login']); 
// Route::get('/', [Recipent::class,'dash']); 
//show dashboard
Route::get('/users/dashboard', [RecipentController::class,'dashboard'])->middleware('auth');
// show reipant
Route::get('/Recipents/recipient', [RecipentController::class,'recipient'])->middleware('auth');
             // show add form
 Route::get('/Recipents/addr', [RecipentController::class,'create'])->middleware('auth'); 
                       
               //  store Recipents data 
 Route::post('/Recipents',[RecipentController::class,'store'])->middleware('auth');
 //show inter add
 Route::get('/interns/addi',[InternController::class,'view'])->middleware('auth');
 //  store intern data 
 Route::post('/addintern',[InternController::class,'store'])->middleware('auth');
 
 
      //show recipant edit form

Route::get('/Recipents/{Recipent}/edit',[RecipentController::class,'edit'])->middleware('auth');
//show intern  edit form

Route::get('/interns/{intern}/editintern',[InternController::class,'edit'])->middleware('auth');
       // update recipant Recipents

Route::put('/interns/{intern}/store',[internController::class, 'update'])->middleware('auth');
// update intern recipant Recipents

Route::put('/Recipents/{Recipent}',[RecipentController::class, 'update'])->middleware('auth');
// Delete  recipant Recipents

Route::delete('/Recipents/{Recipent}',[RecipentController::class, 'destroy'])->middleware('auth');
// Delete intern

Route::delete('/interns/{intern}',[internController::class, 'destroy'])->middleware('auth');
//manage Recipents
      Route::get('/Recipent/manage',[RecipentController::class,'manage'])->middleware('auth');

 // single Recipents must be at the end because it crushes others
Route::get('/Recipents/{Recipent}',[RecipentController::class,'show'])->middleware('auth');;

    //show Register /Create Form
Route::get('/register', [UserController::class,'create'])->middleware('guest');
    //

     //create New User
     Route::post('/users',[UserController::class, 'store'])->middleware('guest');;
     
      // Log user Out
      Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

      // show login form

      Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

      // Login user
      Route::post('/users/authenticate',[UserController::class,'authenticate']);
      // show intern page
      Route::get('/interns/intern',[InternController::class,'intern_show'])->middleware('auth');
      
Route::get('/interns/{intern}/pdff',[PdfController::class,'generate'])->middleware('auth');;

  ///////**********Wekend staff routes */

         /**show weekend staffs */
     Route::get('/weekendstaff/staff',[WeekendController::class,'showStaff'])->middleware('auth');;

     //show staff add
 Route::get('/weekendstaff/add',[WeekendController::class,'view'])->middleware('auth');

//  store weekend data 
 Route::post('/addstaff',[WeekendController::class,'store'])->middleware('auth');


//show staff  edit form

Route::get('/weekendstaff/{weekend}/edit',[WeekendController::class,'edit'])->middleware('auth');


// update staff recipant Recipent

Route::put('/weekendstaff/{weekend}',[WeekendController::class, 'update'])->middleware('auth');
// Delete  recipant Recipent

Route::delete('/weekendstaff/{weekend}',[WeekendController::class, 'destroy'])->middleware('auth');

/***********Report******/

      //show report page
Route::get('/Reports/main',[ReportController::class,'showmain'])->middleware('auth');;


    //show intern report
Route::get('/Reports/intern',[ReportController::class,'showinternreport'])->middleware('auth');;


    //Intern monthly report
Route::get('/Reports/internsmonthly',[PdfController::class,'generateinternmonth'])->middleware('auth');;

    //Intern anualy report
Route::get('/internsanually',[PdfController::class,'generateinteranualy'])->middleware('auth');;

    //show recipent report

Route::get('/Reports/recipent',[ReportController::class,'showstaffreport'])->middleware('auth');;

    //staff monthly report
Route::get('/recipentmonthly',[PdfController::class,'generatestaffmonthly'])->middleware('auth');;

    //staff anualy report
 Route::get('/recipentanualy',[PdfController::class,'generatestaffanualt'])->middleware('auth');;


      //show weekend report

Route::get('/Reports/weekend',[ReportController::class,'showweekendreport'])->middleware('auth');;

    //weekend monthly report

Route::get('/weekendmontly',[PdfController::class,'generateweekendmonthly'])->middleware('auth');;
    //weekend anualy report

Route::get('/weekendanualy',[PdfController::class,'generateweekendanualy'])->middleware('auth');

Route::get('/users/setting',[PdfController::class,'showsetting'])->middleware('auth');

/***** */
// //show add new admin page
// Route::get('',[AdminController::class,'show'])->middleware('auth');;
// //store new admin
// Route::get('',[AdminController::class,'store'])->middleware('auth');;
// //show edit admin
// Route::get('',[AdminController::class,'edit'])->middleware('auth');;
// //update admin
// Route::get('',[AdminController::class,'update'])->middleware('auth');;



   