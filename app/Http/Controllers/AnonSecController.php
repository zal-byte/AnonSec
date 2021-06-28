<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnonSec;
use Session;
class AnonSecController extends Controller
{
    //
    public function index(){
        return view('anonsec.main');
    }
    public function posts(){
        $anon = AnonSec::latest()->paginate(5);
        return view('anonsec.posts.main',['posts'=>$anon]);
    }

    public function showNewFormPost(){
        return view('anonsec.posts.create');
    }
    public function newPost(Request $request){
        $identifier = uniqid()."_".time();
       if($request->upload != null ){
        $num = 0;
        for($i = 0; $i < count($request->upload); $i++){
            $image = $request->file('upload')[$i];
            $filename = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $final_name = $filename . "_" . time() .$extension;

            $image->storeAs('public/imgs',$final_name);
            $num = $num + 1;
        }

                $anonsec = new AnonSec;
                $anonsec->title = $request->title;
                $anonsec->content = $request->content;
                $anonsec->img_identifier = $identifier;
                $anonsec->tag_identifier = $identifier;
                $anonsec->nickname = \Auth::user()->nickname;
                $anonsec->date = new \DateTime;

                $simpan = $anonsec->save();

                if($num == count($request->file('upload'))){
                    Session::flash('success','Postingan berhasil di unggah.');
                    return redirect()->route('posts');
                }else{
                    Session::flash('errors',[''=>'Postingan gagal di unggah bosque']);
                    return redirect()->route('home');
                }
       }
    }
}
