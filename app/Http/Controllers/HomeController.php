<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use DB;
use Hash;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile(){
        $profile=Auth()->user();
        return view('user.profile')->with('profile', $profile);
    }

    public function profileUpdate(Request $request, $id){
        $user = User::findOrFail($id);
        $data = $request->all();
        if($request->file('avatar')){
            $data['avatar'] = 'img/'.$request->file('avatar')->getClientOriginalName();
            Storage::disk('uploads')->put($request->file('avatar')->getClientOriginalName(), file_get_contents($request->file('avatar')->getRealPath()));
        }
        $status=$user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Successfully updated your profile');
        }
        else{
            request()->session()->flash('error','Please try again!');
        }
        return redirect()->back();
    }

    public function changePassword(){
        return view('user.changePassword');
    }

    public function changePasswordSubmit(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect()->route('home')->with('success','Password successfully changed');
    }


    public function showOrders(){
        $orders = DB::table('orders')
                            ->where('user_id', Auth::user()->id)
                            ->groupBy('id')
                            ->orderBy('created_at', 'desc')
                            ->select('id')
                            ->get()
                            ->toArray();
                            
        $data = [];
        foreach($orders as $pur){

            $offer = DB::table('order_details')
                        ->join('products', 'products.pro_id','=','order_details.product_id')
                        ->join('orders', 'order_details.order_id','=','orders.id')
                        ->where('order_details.order_id', $pur->id)
                        ->select('order_details.*',
                                    'orders.order_number',
                                    'orders.sub_total',
                                    'orders.payment_menthod',
                                    'orders.payment_status',
                                    'orders.status',
                                    'orders.fullname',
                                    'orders.email',
                                    'orders.phone',
                                    'orders.address',
                                    'orders.created_at',
                                    'products.pro_name',
                                    'products.pro_thumbnail',
                                    'products.pro_price',
                                    )
                        ->get()
                        ->toArray();
                        
            array_push($data, $offer);
        }

        //dd($data);

        return view('user.orders')->with('orders', $data);
    }
}
