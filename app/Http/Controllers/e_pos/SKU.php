<?php

namespace App\Http\Controllers\e_pos;
use App\Http\Controllers\Controller;
use App\Models\skus;
use App\Models\categorys;
use Illuminate\Http\Request;
use DB;
class SKU extends Controller
{
    public function view()
    {
        $category = DB::table('categorys')
                ->where('status', '=', 'Active')
                ->get();
        $sku = skus::all();
        return view('mv.e-pos.sku',['sku' => $sku  , 'category' => $category]);

    }

    public function store(Request $req){
        $sku = new skus;
        $sku -> Category = $req -> Category;
        $sku -> SKUname = $req -> SKUname;
        $sku -> Price = $req -> Price;
        $sku -> Quantity = $req -> Quantity;
        $sku -> Trigger = $req -> Trigger;
        $sku -> save();
        return back();
    }

    public function edit($id){
        $sku = skus::where('sku_id', $id)->first();
        return response()-> json([
            'status'=> 200,
            'sku' => $sku,
        ]);
    }
    public function update(Request $req)
    {
        dd($req);
        $sku = skus::find($req->sku_id);
        $sku -> Category =$req -> Category;
        $sku -> SKUname =$req -> SKUname;
        $sku -> Price =$req -> Price;
        $sku -> Quantity =$req -> Quantity;
        $sku -> Trigger =$req -> Trigger;
        $sku -> update();
        return back();
    }

    public function delete($id)
    {
        // $res=User::where('id',$id)->delete();
        DB::table('skus')->where('sku_id', '=', $id)->delete();
        return redirect('sku');
    }
}
