<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;
use Session;
use DB;
use Hash;
use Illuminate\Support\Str;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                Session::put('currentUser', Auth::user());
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'avatar' => 'img/profile.jpg',
                    'status' => 'active',
                    'password' => bcrypt('user')
                ]);
    
                Auth::login($createUser);
                Session::put('currentUser', Auth::user());
                return redirect('/');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
                Session::put('currentUser', Auth::user());
                return redirect('/');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'avatar' => 'img/profile.jpg',
                    'status' => 'active',
                    'password' => bcrypt('user')
                ]);
      
                Auth::login($newUser);
                Session::put('currentUser', Auth::user());
                return redirect('/');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}