<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
     public function showsettings(){
        return view('settings.Settings');
}
}
