<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnonSec;
use App\Models\Tags;
use Session;
use Validator;
class AnonSecController extends Controller
{
    //
    public function index(){
        return view('anonsec.main');
    }
    public function posts(){
        $anon = AnonSec::latest()->paginate(6);
        $tags = \DB::table('tag')->get();
        return view('anonsec.posts.main',['posts'=>$anon,'tags'=>$tags]);
    }
    public function view(AnonSec $anon){
        $anon = \DB::table('anon_secs')->where('id', $anon->id)->get();
        return view('anonsec.posts.view', ['anon'=>$anon]);
    } 

    public function tags(AnonSec $tags){
        $post = \DB::table('anon_secs')->where('tag_identifier', $tags->tag_identifier)->get();
        $tags = \DB::table('tag')->get();
        return view('anonsec.posts.main',['posts'=>$post,'tags'=>$tags]);
    }

    public function showNewFormPost(){
        return view('anonsec.posts.create');
    }
    public function newPost(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
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
