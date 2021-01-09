<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\OrderDetail;
use App\Models\ProductReview;
use Auth;
use Session;
use DB;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Gloudemans\Shoppingcart\Facades\Cart;

require '../vendor/autoload.php';

class FrontendController extends Controller
{
    public function sendEmail($to, $name, $subject, $content)
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //Server settings
        $mail->isSMTP();                                         // Send using SMTP
        $mail->CharSet    = 'UTF-8';
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   =  true;                                // Enable SMTP authentication
        $mail->Username   = 'nguy3n.web1.hcmus@gmail.com';       // SMTP username
        $mail->Password   = 'Nguy3n47@hcmus';                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                 // TCP port to connect to

        //Recipients
        $mail->setFrom('nguy3n.web1.hcmus@gmail.com', 'E-SHOP');
        $mail->addAddress($to, $name);                           // Add a recipient

        // Content
        $mail->isHTML(true);                                     // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        $mail->AltBody = $content;

        $mail->send();
        return true;
    }

    public function home(){
        $new_products = DB::table('products')
                            ->latest()
                            ->take(10)
                            ->get();

        $best_selling_products =  DB::table('orders')
                            ->join('order_details', 'orders.id','=','order_details.order_id')
                            ->join('products','products.pro_id','=','order_details.product_id')
                            ->select('order_details.product_id', 'products.pro_id', 'products.pro_name', 'products.pro_slug', 'products.pro_price', 'products.pro_thumbnail')
                            ->groupBy('order_details.product_id', 'products.pro_id', 'products.pro_name', 'products.pro_slug', 'products.pro_price', 'products.pro_thumbnail')
                            ->orderBy(DB::raw('SUM(order_details.quantity)'),'DESC')
                            ->take(10)
                            ->get();


        $best_wishlist_products = DB::table('products')
                            ->join('wishlists','wishlists.product_id','=','products.pro_id')
                            ->select('products.pro_id', 'products.pro_name', 'products.pro_slug', 'products.pro_price', 'products.pro_thumbnail')
                            ->groupBy('wishlists.product_id', 'products.pro_id', 'products.pro_name', 'products.pro_slug', 'products.pro_price', 'products.pro_thumbnail')
                            ->orderBy(DB::raw('SUM(wishlists.product_id)'),'DESC')
                            ->take(10)
                            ->get();

        return view('frontend.index', compact('new_products', 'best_selling_products', 'best_wishlist_products'));
    }

    public function productDetail($slug){
        $product_detail = Product::getProductBySlug($slug);
        $images = Image::where('product_id', $product_detail->pro_id)->get();

        $totalWishlishProduct = DB::table('wishlists')->where('product_id', $product_detail->pro_id)->count();
        $totalOrderProduct = DB::table('order_details')->where('product_id', $product_detail->pro_id)->count();
        $totalReviewProduct = DB::table('product_reviews')->where('product_id', $product_detail->pro_id)->count();

        if(Auth::check()){
            $checkWishlist = Wishlist::where('product_id', $product_detail->pro_id)->where('user_id', Auth::user()->id)->first();
        }
        else{
            $checkWishlist = null;
        }

        $comments = DB::table('product_reviews')
                    ->join('users', 'product_reviews.user_id', '=', 'users.id')
                    ->join('products', 'product_reviews.product_id', '=','products.pro_id')
                    ->where('products.pro_id', $product_detail->pro_id)
                    ->select('users.name', 'users.avatar', 'product_reviews.comment', 'product_reviews.rate', 'product_reviews.created_at')
                    ->get();

        $data =[
            'images' => $images,
            'product_detail'=> $product_detail,
            'checkWishlist' => $checkWishlist,
            'totalWishlishProduct'=> $totalWishlishProduct,
            'totalOrderProduct'=> $totalOrderProduct,
            'totalReviewProduct'=> $totalReviewProduct,
            'comments'=> $comments
        ];
        
        return view('frontend.pages.product_detail', $data);
    }

    public function allProduct(){
        // $products = DB::table('products')
        //                 ->latest()
        //                 ->get();
        $products = Product::orderBy('created_at', 'desc')->paginate(9);
        $categories = Category::all();
        return view('frontend.pages.product_list', compact('products', 'categories'));
    }

    public function categoryProducts($slug){
        $category = Category::where('c_slug', $slug)->first();
        $products = Product::where('pro_category_id', $category->c_id)->orderBy('created_at', 'desc')->paginate(9);
        $categories = Category::all();
        $data = [
            'products'=> $products,
            'category'=> $category,
            'categories' => $categories
        ];
        return view('frontend.pages.category_products_list', $data);
    }

    public function register(){
        return view('frontend.pages.register');
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function verifyEmail(){
        if (session()->has('user')) {
            return view('frontend.pages.verify');
        }
        else{
            return redirect()->route('home');
        }
    }

    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('currentUser', $data['email']);
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Invalid email and password please try again!');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->forget('currentUser');
        return redirect()->route('home');
    }

    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:1|confirmed',
        ]);

        $user = $request->all();
        $code = mt_rand(100000, 999999);
        $data = [
            'email' => $user['email'],
            'code'=> $code
        ];
        //dd($data);
        $check = $this->create($user);
        Session::put('user', $data);
        if($check){
            $bodyContent = "<a href='#' style='background-color:#166fe5;border:1px ;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;line-height:44px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;' target='_blank'>Verify Email</a>";
            $this->sendEmail($user['email'], $user['first_name'], $code . ' is your account verify email code', $bodyContent);
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('verify.email');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }


    public function verifyEmailSubmit(Request $request){
        $code = $request->get('code');
        $value = $request->session()->get('user');
        if($code == $value['code']){
            $user = User::where('email', $value['email'])->first();
            $user->status = 'active';
            $user->save();
            request()->session()->flash('success','Email Verified');
            request()->session()->forget('user');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Code hong co dung :<');
            return back();
        }
    }

    public function create(array $data){
        return User::create([
            'name'=>$data['first_name'].' '.$data['last_name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'password'=>Hash::make($data['password']),
            'avatar'=>'img/profile.jpg',
            'status'=>'0'
            ]);
    }

    public function passwordReset()
    {
        return view('frontend.pages.password_reset');
    }

    public function codeResetPassword(){
        if (session()->has('getUser')) {
            return view('frontend.pages.code_reset_password');
        }
        else{
            return redirect()->route('user.password.reset');
        }
    }

    public function newPassword(){
        if (session()->has('getUser')) {
            return view('frontend.pages.password_new');
        }
        else{
            return redirect()->route('user.password.reset');
        }
    }

    public function newPasswordSubmit(Request $request){
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $value = $request->session()->get('getUser');
        $user = User::where('email', $value['user']->email)->first();
        $user->password = Hash::make($request->new_password);
        $user->save();
        request()->session()->flash('success','Password changed successfully');
        request()->session()->forget('getUser');
        return view('frontend.pages.login');
    }

    public function codeResetPasswordSubmit(Request $request){
        $code = $request->get('code');
        $value = $request->session()->get('getUser');
        if($code == $value['code']){
            return redirect()->route('user.new.password');
        }
        else{
            request()->session()->flash('error','Code hong co dung :<');
            return back();
        }
    }

    public function passwordResetSubmit(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();
        if($user){
            $code = mt_rand(100000, 999999);
            $data = [
                'user' => $user,
                'code'=> $code
            ];
            Session::put('getUser', $data);
            $this->sendEmail($user->email, $user->name, $code . ' is your recovery code', $code);
            return redirect()->route('user.code.password.reset');
        }
        else{
            request()->session()->flash('error','Unregistered email account');
            return back();
        }
    }
}
