<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnonSec;
class AnonSecController extends Controller
{
    //
    public function index(){
        return view('anonsec.main');
    }
    public function posts(){
        $anon = AnonSec::latest();
        return view('anonsec.posts.main',['post'=>$anon]);
    }

    public function showNewFormPost(){
        return view('anonsec.posts.create');
    }
}
