<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
class Senderviewer extends Controller
{

    public function showSender(){
        return view('users.sendpasswordlink');
}

public function sendResetLink(Request $request){
    $request->validate([
        'email'=>'required|email|exists:users,email'
    ]);

    $token = \Str::random(64);
    \DB::table('password_resets')->insert([
          'email'=>$request->email,
          'token'=>$token,
          'created_at'=>Carbon::now(),
    ]);
    $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);

    $body = "We have received a request to reset the password for <b>AUY3 guest entry management system</b> account associated with ".$request->email.". You can reset your password by clicking the reset button below";

   \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
         $message->from('RecoveryforEFPC@gmail.com','AUY3 Guest Entry management system for EFPC');
         $message->to($request->email,'Your name')
                 ->subject('Reset Password');
   });

   return back()->with('success', 'We have e-mailed your password reset link!');
}



public function showResetForm(Request $request, $token = null){
    return view('users.ResetPassword')->with(['token'=>$token,'email'=>$request->email]);
}

public function resetPassword(Request $request){
    $request->validate([
        'email'=>'required|email|exists:users,email',
        'password'=>'required|min:5|confirmed',
        'password_confirmation'=>'required',
    ]);

    $check_token = \DB::table('password_resets')->where([
        'email'=>$request->email,
        'token'=>$request->token,
    ])->first();

    if(!$check_token){
        return back()->withInput()->with('fail', 'Invalid token');
    }else{

        user::where('email', $request->email)->update([
            'password'=>\Hash::make($request->password)
        ]);

        \DB::table('password_resets')->where([
            'email'=>$request->email
        ])->delete();

        // return redirect()->route('users.login')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
      return view('users.login')->with('info', 'Your password has been changed! You can login with new password');
   
    }
}


}
