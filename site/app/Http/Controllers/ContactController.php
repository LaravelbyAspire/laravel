<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller{

 public function send(Request $request){

   $request->validate([
     'fullname' => 'required',
     'email' => 'required|email',
     'tel' => 'required',
     'message' => 'required'
   ]);

  if($this->isOnline()){
    $mail_data = [
      'recipient'=>'ryny@sanly.tm',
      'fromEmail'=>$request->email,
        'fromName'=>$request->fullname,
          'subject'=>$request->tel,
          'body'=>$request->message
    ];

    \Mail::send('email-template',$mail_data, function($message) use ($mail_data){
      $message->to($mail_data['recipient'])
              ->from($mail_data['fromEmail'],$mail_data['fromName'])
              ->subject($mail_data['subject']);
    });

    return redirect()->back()->with('success', 'Email Sent!');

  }else{
    return redirect()->back()->withInput()->with('error', '404');
  }

 }


 public function isOnline($site = "https://tdh.gov.tm/tk"){
   if(@fopen($site, "r")){
     return true;
   }else{
     return false;
   }
 }



}
