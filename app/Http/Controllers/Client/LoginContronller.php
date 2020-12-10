<?php

namespace App\Http\Controllers\Client;

use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginContronller extends Controller
{
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
        return view('../Auth/SignInSignUp');
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
<<<<<<< HEAD
=======
        $user = new Users();


        $user->id = "3";
        $user->username = "v";
        $user->password = bcrypt($request->password);
        $user->email =  $request->email;
        $user->save();
        return redirect()->action('Client\LoginContronller@create');
>>>>>>> d30f5a6f86d1fd599fc3a8f0a1314bc543f4133a
    }

    // login
    public function loginUser(Request $request){
	    $email = $request->email;
        $password = $request->password;
        $user = DB::table('users')
                    ->where('email', '=', $email)
                    ->first();
        if (!$user) {
            return response()->json(['success'=>false, 'message' => 'Tai khoan khong ton tai!']);
        }
        if (!Hash::check($password, $user->password)) {
            return response()->json(['success'=>false, 'message' => 'Mat khau khong chinh xac!']);
        }
            return response()->json(['success'=>true,'message'=>'Dang nhap thanh cong!', 'data' => $user]);
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