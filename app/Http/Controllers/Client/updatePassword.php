<?php

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class updatePassword extends Controller
{
    public function getconfirmPass(Request $request)
    {
        return view('../Auth/resetPassword');
    }

    public function postconfirmPass(Request $request)
    {
        $id = $request->session()->get('id');
        if (!is_null($request->pass1) && !is_null($request->pass2) && $request->pass1 === $request->pass2) {
            DB::table('users')->where('id', $id)->update(array('password' => bcrypt($request->pass1)));
            $request->session()->flush();
            return redirect()->action('Client\LoginContronller@create');
        } else {
            return redirect()->action('Client\updatePassword@getconfirmPass');
        }
    }
}