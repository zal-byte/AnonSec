<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;
class AuthController extends Controller
{
    //
    public function showFormLogin(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('anonsec.auth.login');
    }
    public function showFormRegister(){
        return view('anonsec.auth.register');
    }
    public function register(Request $request){
        $rules = [
            'name'=>'required|string',
            'nickname'=>'required|unique:users',
            'password'=>'required|string',
        ];

        $messages = [
            'name.required'=>'Nama lu siapa ?',
            'nickname.required'=>'Nick lu apaan',
            'nickname.unique'=>'Nick ini udah dipake',
            'password.required'=>'Pake pw dong',
            'password.confirmed'=>'Yang bener dong',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->nickname = $request->nickname;
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        if($simpan){
            Session::flash('success','Register berhasil bos ku');
            return redirect()->route('login');
        }else{
            Session::flash('errors',[''=>'Gagal register bos ku']);
            return redirect()->route('register');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function login(Request $request){
        $rules = [
            'nickname' => "required|string",
            'password' => "required|string",
        ];

        $messages = [
            'nickname.required' => "Masukin nicknya dong beb",
            'password.required' => "Mana pw nya oi!",
            'password.string' => "Password harus string yaa :)",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = [
            'nickname'=>$request->input('nickname'),
            'password'=>$request->input('password'),
        ];

        Auth::attempt($data);

        if(Auth::check()){
            return redirect()->route('home');
        }else{
            Session::flash('error', "Nickname atau Pw nya salah");
            return redirect()->route('login');
        }
    }
}
