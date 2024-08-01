<?php

namespace App\Http\Controllers\venue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\venue;
use DB;
use Illuminate\Support\Facades\Crypt;
class addnewvenue extends Controller
{
    public function view(Request $req)
    {
        $venue = venue::all();
        return view('mv.venue.addnewvenue',compact('venue'));
        
    }

    public function delete($id)
    {
        DB::delete('delete from venue where id = ?',[$id]);
        return redirect('addnewvenue');
    }

    public function edit($id)
    {
        $data =venue::find($id);
        return view('mv.venue.editvenueinfo',[
            'data' => $data
        ]);

    }
    function update(Request $req)
    {        
        $venue = venue::find($req->id);
        $venue->venuename = $req->input('venue_name');
        $venue->address = $req->input('venue_address');
        $venue->city_area = $req->input('City');
        $venue->state = $req->input('State');
        $venue->postcode = $req->input('Postcode');
        $venue->rentalperday = $req->input('RentalPerDays');
        $venue->maxcapacity = $req->input('MaxCapacity');
        $venue->picname = $req->input('PICName');
        $venue->picemail = $req->input('PICEmail');
        $venue->pich_p = $req->input('PICHP');
        $venue->otherinfo = $req->input('otherinfo');
        $venue->textarea = $req->input('textarea');
        $venue->save();
        return redirect('addnewvenue');
    }

    public function editstatus($id,$status)
    {
        $decryptedId = Crypt::decrypt($id);
        $decryptedStatus = Crypt::decrypt($status);
        $data =venue::find($decryptedId);
        if($decryptedStatus=='active' || $decryptedStatus=='inactive'){
            $data->status=$decryptedStatus;
            $data->save();
            return back();
        }else{

            echo 'status value wrong!!!';
        }
    }
}
