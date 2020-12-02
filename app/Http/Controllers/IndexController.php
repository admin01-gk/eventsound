<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
       return view('frontend.index');
    }
    // 
    public function getDangKy()
    {
        return view('backend.dangKy');
    }
    // 
    public function postDangKy(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);       
        $user->level = $request->level;
        $user->save();
        return redirect()->intended('login');
    }

}