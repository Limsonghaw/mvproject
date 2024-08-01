<?php

namespace App\Http\Controllers\venue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\venue;

class venueinfo extends Controller
{
    function addData(Request $req){
        $venue = new venue;
        $venue -> venuename = $req -> venue_name;
        $venue -> address = $req -> venue_address;
        $venue -> city_area = $req -> City;
        $venue -> state = $req -> State;
        $venue -> postcode = $req -> Postcode;
        $venue -> rentalperday = $req -> RentalPerDays;
        $venue -> maxcapacity = $req -> MaxCapacity;
        $venue -> picname = $req -> PICName;
        $venue -> picemail = $req -> PICEmail;
        $venue -> pich_p = $req -> PICHP;
        $venue -> otherinfo =json_encode($req ->otherinfo);
        $venue -> textarea =json_encode($req ->textarea);
        $venue -> status = 'active';
        $venue -> save();
        return redirect('addnewvenue');
    }

}
