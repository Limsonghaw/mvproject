<?php

namespace App\Http\Controllers\bb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\emailbb;
use App\Models\event;
use App\Models\email;
use DB;
class bbemail extends Controller
{
    public function view(Request $req)
    {
        $email = DB::table('email')->where('type', 'email')->get();
        $event = event::all();
        return view('bb.email',['event' => $event, 'email' => $email]);
        
    }
}
