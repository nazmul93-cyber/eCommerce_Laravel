<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//custom
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index() {

        // return "Welcome to product page"; 

        $product = Product::all();

        return view('product',['passKey'=>$product]);
    }

    public function details($id) {

        $data  = Product::find($id);

        return view('details',['passKey' => $data]);
    }

    public function search(Request $request) {

        $data = Product::where('name','like','%'.$request->search.'%')->get();

        return view('search',['passKey' => $data]);
    }

    public function addTOCart(Request $request) {

        if($request->session()->has('user')){

            // return "working";
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')->id;
            $cart->product_id = $request->product_id;
            $cart->save();

            return redirect('/');
        }else {

            return redirect('/login');
        }
    }

    static function cartItemCount() {

        $user_id = Session::get('user')->id;
        return Cart::where('user_id',$user_id)->count();

    }

    public function logout() {

        Session::forget('user');
        return redirect('/login');
    }

    public function cartList() {

        $userId = Session::get('user')->id;
        // dd($userId);

        $cartProducts = DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->get();

        // dd($cartProducts);

        return view('cartlist',['passKey' => $cartProducts ]);
    }

    public function removeCart($id) {

        // Cart::find($id)->delete();
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    public function orderNow() {

        $userId = Session::get('user')->id;
        $cartPrice = DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');
        
        // dd($cartPrice);

        return view('ordernow',['passKey' => $cartPrice]);

    }

    public function orderPlace(Request $request) {

        // return $request->input();
        $userId = Session::get('user')->id;
        $allCart = Cart::where('user_id',$userId)->get();

        foreach($allCart as $cart){

            $order = new Order;
            $order->user_id = $cart->user_id; 
            $order->product_id = $cart->product_id;
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();


        }

        return redirect('/');

    }

    public function myOrders() {

        $userId = Session::get('user')->id;
        $OrderList = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        
        // dd($cartPrice);

        return view('myorder',['passKey' => $OrderList]);
    }

}
