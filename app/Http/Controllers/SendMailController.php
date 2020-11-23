<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendMailController extends Controller
{
   public function getSendMail(Request $request)
   {
       
        $email=$request->email;
       Mail::send('frontend/index',[
           'name'=> $request->name,
           'phone'=>$request->phone,
           'content'=>$request->content,
       ], function ($mail) use ($request) {
           $mail->from($request->email, $request->name);
           $mail->to('truongsadng.nishu@gmail.com', 'Ngô Trường Sa');
           $mail->cc('tieutuluumanh777@gmail.com', 'Ngô Trường Sinh');
           $mail->subject('Thông tin Khách Hàng');
       });
       return back();
   }
}