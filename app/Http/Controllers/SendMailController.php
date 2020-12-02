<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class SendMailController extends Controller
{
   public function getSendMail(Request $request)
   { 
    $data['info'] = $request->all();
        $email=$request->email;
       Mail::send('frontend.mail',$data,
       function ($mail) use ($request) {
           $mail->from($request->email, $request->name);
           $mail->to('truongsadng.nishu@gmail.com', 'Ngô Trường Sa');
           $mail->cc('truongsadng.nishu@gmail.com', 'Ngô Trường Sinh');
           $mail->subject('Thông tin Khách Hàng');
       });
       return back();
   }
}