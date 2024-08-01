<?php
namespace App\Http\Controllers\email;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\email;
use DB;
use Illuminate\Support\Facades\Session;
class addnewemail extends Controller
{
    function filter(Request $req)
    {
        $query=email::query();
        
        // $query = email::all();
        $type = DB::table('email')->distinct()->pluck('type');
        $send_to = DB::table('email')->distinct()->pluck('send_to');

        if($req->ajax()){
            // $query = email::all();
            $query = email::query();
            if(!empty($req->type)  && $req->type!="All"){
                $query->where(['type' => $req->type]);
            }
            if(!empty($req->send_to) && $req->send_to!="All"){
                $query->where(['send_to' => $req->send_to ]);
            }
            // $query->where(['type' => $req ->type])->orwhere(['send_to' => $req -> send_to])->get();
            // $query->when('type' === $req->type);
            $users=$query->get()->toArray();
        // $users = ['type'=>$req->type,'send_to'=>$req->send_to];
            // print_r($users); die;
            return response()->json(['email' => $users]);
        }
        $email = $query ->get();
        return view('mv.email.addnewemail',compact('email','type','send_to'));
        
    }
    public function delete($id)
    {
        DB::delete('delete from email where id = ?',[$id]);
        return redirect('addnewemail');
    }
    
    public function edit($id)
    {
        $data =email::find($id);
        return view('mv.email.editemail',['data' => $data]);
    }

    function update(Request $req)
    {        
        $email = email::find($req->id);
        $email->type = $req->input('radiotype');
        $email->title = $req->input('title');
        $email->send_to = $req->input('sendtoradio');
        $email->date = $req->input('multipledate');
        $email->content = $req->input('content');
        $email->save();
        // dd($email->save());
        // $email = email::find($req->id);
        // $email->touch();
        // DB::update('update email set  type = ? ,title = ?, send_to = ?, date = ?, content = ?  where id = ?',[$type,$title,$send_to,$date,$content,$req ->id]);
        // DB::update('update email set updated_at = now() where id = ?', [$req->id]);
        // echo "Record updated successfully.<br/>";
        // echo '<a href = "/edit-records">Click Here</a> to go back.';
        
        // $data =email::find($req -> id);
        // $data -> type =$req -> radiotype;
        // $data -> title =$req -> title;
        // $data -> send_to =$req -> sendtoradio;
        // $data -> date =$req -> multipledate;
        // $data -> content =$req -> content;
        // $data -> save();
        return redirect('addnewemail');
    }
}
