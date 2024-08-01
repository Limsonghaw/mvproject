<?php

namespace App\Http\Controllers\event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\venue;
use App\Models\voteby;
use App\Models\Image;
use App\Models\thumbnail;

class eventinfo extends Controller
{
    public function view(){
        $venue = venue::where('status', 'active')->get();
        $voteby = voteby::all();
        return view('mv.event.eventinfo',['venue'=>$venue,'voteby'=>$voteby]);
    }

    public function addData(Request $req){
        // $req->validate([
        //     'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);
        $event =new event([
            'eventname' => $req->eventname,
            'audience' => $req->audience,
            'event_venue' => $req->event_venue,
            'datetime' => $req->datetime,
            'artist' => $req->artist,
            'singer' => $req->singer,
            'language' => $req->language,
            'event_online' => $req->event_online,
            'online_link' => $req->online_link,
            'description' => $req->description,
            'saleticket' => $req->saleticket,
            'price' => $req->price,
            'promotional_price' => $req->promotional_price,
            'capacity' => $req->capacity,
            'maxbooking' => $req->maxbooking,
            'point' => $req->point,
            'voteby' => json_encode($req->voteby),
            'youtube' => $req->youtube,
            'instagram' => $req->instagram,
            'facebook' => $req->facebook,
            'twitter' => $req->twitter,
            'blog' => $req->blog,
            'website' => $req->website,
            'tiktok' => $req->tiktok,
            'name' => $req->name,
            'email' => $req->email,
            'phonenumber' => $req->phonenumber,
        ]);
        $event->save();

        if($req->hasFile("thumbnail")){
            $thumbnails=$req->file("thumbnail");
            foreach($thumbnails as $thumbnail){
                $imageName=time().'_'.$thumbnail->getClientOriginalName();
                $refName=date('mdYHis') . uniqid();
                $thumbnailData = ([
                    'event_id' => $event->id,
                    'thumbnail' => $imageName,
                    'ref' => $refName,
                ]);
                $thumbnail->storeAs('public/thumbnail', $imageName);
                thumbnail::create($thumbnailData);
            }
        }
        if($req->hasFile("image")){
            $images=$req->file("image");
            foreach($images as $image){
                $imageName=time().'_'.$image->getClientOriginalName();
                $imageData = [
                    'event_id' => $event->id,
                    'image' => $imageName,
                    'ref' => date('mdYHis') . uniqid()
                ];
                $image->storeAs('public/image', $imageName);
                Image::create($imageData);
            }
        }
        return redirect('addnewevent');
    }

    public function addvoteby(Request $req){
        $voteby =new voteby;
        $voteby->voteby =$req->input('customVoteOption');
        $voteby->save();
    }
}