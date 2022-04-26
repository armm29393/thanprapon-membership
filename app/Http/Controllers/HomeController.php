<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile(){
        return view('profile');
    }

    public function updateProfile(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255'
        ]);

        $data = User::find(Auth::id());
        $data->name = $request->input('name');

        if($request->input('email') != $data->email){
            $request->validate([
                'email' => 'required|unique:users',
            ]);
            $data->email = $request->input('email');
        }

        if(!empty($request->input('password'))){
            $request->validate([
                'password' => 'required|string|min:6|confirmed',
            ]);
            $data->password = Hash::make($request->input('password'));
        }
        $data->save();
        return back()->with('success','Update Successfully');
    }
}
