<?php

namespace App\Http\Controllers\event;

use App\Http\Controllers\Controller;
use App\Models\event;
use App\Models\Image;
use App\Models\thumbnail;
use App\Models\venue;
use App\Models\voteby;
use Illuminate\Http\Request;

class addnewevent extends Controller
{
    public function view()
    {
        $event = event::all();
        return view('mv.event.addnewevent', ['event' => $event]);
    }

    public function delete($id)
    {
        $event = event::find($id);
        $event->delete();
        return redirect('addnewevent');
    }

    public function edit($id)
    {
        $event = event::find($id);
        $venue = venue::where('status', 'active')->get();
        $voteby = voteby::all();
        //images is function name
        $image = $event->images;
        //thumbnails is function name
        $thumbnail = $event->thumbnails;
        return view('mv.event.editevent', [
            'event' => $event,
            'venue' => $venue,
            'voteby' => $voteby,
            'image' => $image,
            'thumbnail' => $thumbnail,
        ]);

    }
    public function update(Request $req)
    {
        $event = event::find($req->id);
        $event ->update([
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

    public function deleteimage($ref)
    {
        $images = Image::where('ref', $ref)->first();
        if ($images) {
            $imagePath = "storage/image/" . $images->image;
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file from storage
            }
            $images->delete(); // Delete the image record from the database
        }
        Image::where('ref', $ref)->delete();
        return back();
    }

    public function deletethumbnail($ref)
    {
        $thumbnails = thumbnail::where('ref', $ref)->first();
        if ($thumbnails) {
            $imagePath = "storage/thumbnail/" . $thumbnails->thumbnail;
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file from storage
            }
            $thumbnails->delete(); // Delete the image record from the database
        }
        thumbnail::where('ref', $ref)->delete();
        return back();
}
}