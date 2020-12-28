<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Gmail;

class forgotPassword extends Controller
{
    private function generateRandomString($length = 6)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getForgotPassword()
    {
        return view('../Auth/forgotPass');
    }

    public function postForgotPassword(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();
        if ($user !== null) {
            $details = [
                'title' => 'Reset Password',
                'body' => 'This is for testing email using smtp',
                'code' => $this->generateRandomString(6)
            ];


            Mail::to($request->email)->send(new Gmail($details));
            // save code to session to check
            $request->session()->put(['id' => $user->id, 'code' => $details['code']]);
            return redirect()->action('Client\forgotPassword@getEnterCode');
        } else {
            return redirect()->action('Client\forgotPassword@getForgotPassword');
        }
    }


    public function getEnterCode()
    {
        return view('../Auth/EnterCode');
    }

    public function postEnterCode(Request $request)
    {
        $id = $request->session()->get('id');
        $code = $request->session()->get('code');
        if ($request->code === $code) {
            return redirect()->action('Client\updatePassword@getconfirmPass');
        } else {
            return redirect()->action('Client\forgotPassword@getEnterCode');
        }
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}