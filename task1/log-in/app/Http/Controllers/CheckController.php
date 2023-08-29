<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\users;


class CheckController extends Controller
{
    public function checkData(Request $request)
    {
        //extract the value
        $username = $request->input('username');
        $password = $request->input('password');

        
        $data = users::where('user-name', $username)->first();

        if ($data) {
            if($data->password == $password) {
                return view('/homepage');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid password');
        }
    }
}

