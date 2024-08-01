<?php

namespace App\Http\Controllers\bb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\smsbb;
class bbsms extends Controller
{
    public function view(Request $req)
    {
        // $venue = venue::all();
        return view('bb.sms');
        
    }
}
