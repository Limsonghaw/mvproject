<?php

namespace App\Http\Controllers\e_pos;
use App\Http\Controllers\Controller;
use App\Models\categorys;
use Illuminate\Http\Request;
use DB;

class category extends Controller
{
    public function view()
    {
        $category = categorys::all();
        return view('mv.e-pos.category',['category' => $category]);
    }

    public function store(Request $req)
    {

        $category = new categorys;
        $category -> category =$req -> category;
        $category -> status =$req -> status;
        $category -> save();
        return back();
    }

    public function edit($id){
        $category = categorys::find($id);
        return response()-> json([
            'status'=> 200,
            'category' => $category,
        ]);
    }

    public function update(Request $req)
    {
        $category = categorys::find($req->id);
        $category -> category =$req -> category;
        $category -> status =$req -> status;
        $category -> update();
        return back();
    }

    public function updatetablestatus(Request $req)
    {
        $category = categorys::find($req->id);
        $category -> status =$req -> status;
        $category -> update();
    }

    public function delete($id)
    {
        // $res=User::where('id',$id)->delete();
        DB::table('categorys')->where('id', '=', $id)->delete();
        return redirect('category');
    }
}


