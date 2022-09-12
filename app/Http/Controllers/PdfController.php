<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\interns;
use App\Models\Listing;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
     public function generate(interns $intern){
       $fname=$intern->fname;
       $lname=$intern->lname;
       $id=$intern->id;
       $photo=$intern ->photo;
       $school=$intern->school;
       $schoo_id=$intern->School_id;
       $phone=$intern->phone;
       $role=$intern->role;
       QrCode::format('png')->generate($schoo_id,'../public/qrcode.png');
       $pdf = Pdf::loadView('index',compact('fname','lname','phone','school','photo','role'));//->save(public_path('pdf/if for'.$fname.'.pdf'));
      return $pdf->download(' ID for Intern '.$fname.' '.$lname.'.pdf');
     
      
   }
   public function generateinternmonth(){
       $registeredby=auth()->user()->name;
      $interns=interns::all();
       $date = Carbon::now()->format('d-m-y');
       $start=Carbon::now()->subDays(30)->format('d-m-y');
       $pdf = Pdf::loadView('internpdf',compact('interns','date','start','registeredby'));//->save(public_path('pdf/report1.pdf'));
      return $pdf->download(' ID .pdf');
      
   }
}
