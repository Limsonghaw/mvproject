<?php

namespace App\Http\Controllers\email;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\email;
use Illuminate\Support\Facades\Crypt;

class emailinfo extends Controller
{
    function view(Request $req){
        return view('mv.email.emailinfo');
    }
    function addData(Request $req){
        // $decryptedId = Crypt::decrypt($req-> event_id);
        $email = new email;
        $email -> type =$req -> radiotype;
        $email -> title =$req -> title;
        $email -> send_to =$req -> sendtoradio;
        $email -> date =$req -> multipledate;
        $email -> content =$req -> content;
        // $email -> event_id =$decryptedId;
        $email -> save();
        return redirect('addnewemail');
    }

}
