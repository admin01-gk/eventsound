<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function getBuy()
    {
       
       return view('frontend.master');
    }
}