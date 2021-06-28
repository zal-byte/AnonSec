<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnonSec;
use Session;
use Validator;
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
        $rules = [
            'title'=>'required|string',
            'content'=>'required',
        ];

        $response = [
            'title.required'=>'Isi judulnya dong sayang.',
            'content.required'=>'Mana konten nya'
        ];

        $validator = Validator::make($request->all(), $rules, $response);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
                $anonsec = new AnonSec;
                $anonsec->title = $request->title;
                $anonsec->content = $request->content;
                if($request->thumbnail != null){
                    $thumb = $request->file('thumbnail');
                    $filename = $thumb->getClientOriginalName();
                    $extension = $thumb->getClientOriginalExtension();
                    $final_name = $filename ."_thumb_". time() .".".$extension;

                    if($thumb->storeAs('public/img/thumbnail', $final_name)){
                        $anonsec->thumbnail = $final_name;
                    }
                }else{
                    $anonsec->thumbnail = null;
                }
                $anonsec->tag_identifier = $identifier;
                $anonsec->nickname = \Auth::user()->nickname;
                $anonsec->date = new \DateTime;

                $simpan = $anonsec->save();
                if($simpan){
                    Session::flash('success', 'Postingan berhasil diunggah.');
                    return redirect()->route('posts');
                }else{
                    Session::flash('errors',[''=>'Postingan gagal di unggah.']);
                }
    }
}
