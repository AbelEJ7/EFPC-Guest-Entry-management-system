<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //show report page
    public function showmain()
    {
      return view('Reports.main');
    }

    //show intern report
public function showinternreport(){
         
            return view('Reports.intern');
            
         }
    //Intern monthly report

    //Intern anualy report


    //show staff report
    public function showstaffreport(){
         
            return view('Reports.recepient');
            
         }

    //staff monthly report

    //staff anualy report
 
      //show weekend report
public function showweekendreport(){
         
            return view('Reports.weekend');
            
         }
    //weekend monthly report

    //weekend anualy report

}
    
