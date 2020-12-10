<?php

namespace App\Http\Controllers\Client;

use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
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
    
    public function random($length){
        $base = 1;
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
      return $base.$randomString;
    }

    public function generateRandomCode($length)
    {
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
    
    public function store(Request $request)
    {
        //
        $u = DB::table('users')->get();
        $base = 1;
        $user = new Users();
        $user->id = $this->random(9-strlen($base));
        $user->password = bcrypt($request->password);
        $user->email =  $request->email;
        $user->codeActive = $this->generateRandomCode(6);
        foreach ($u as $i) {
            if($user->email == $i->email) // Email da ton tai
            {
                // do something
                echo 'Email da ton tai';
                return;
            }
            if($i->id == $user->id){
                $user->id = $this->random(9-strlen($base));
            }
        }
        //dd($user);
        $user->save();
        echo 'Dang ky thanh cong!';
        //return redirect()->action('Client\LoginContronller@create');
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
