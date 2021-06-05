<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    //
    function index()
    {
        $data= product::all();
        return view("product",['products'=>$data]);
    }
    function detail($id)
    {
        $data= product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(request $req)
    {
        $data=product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addtocart(request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')["id"];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }

    }
    static function cartItem()
    {
        $user_id = session()->get('user')['id'];

        $items = Cart::where('user_id',$user_id)->get();
        return count($items);

    }
    function cartlist()
    {
        $user_id = Session()->get('user')['id'];
       $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$user_id)
        ->get();
        return view('cartlist',['products'=>$data]);
    }
    function removecart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');

    }
    function ordernow()
    {
        $user_id = Session()->get('user')['id'];
       $total= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }
    function orderplace(request $req)
    {
        $user_id = Session()->get('user')['id'];
        $allcart=cart::where('user_id',$user_id)->get();
        foreach($allcart as $cart)
        {
            $order=new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->save();
        }
        cart::where('user_id',$user_id)->delete();
        return redirect('/');
    }
    function myorder()
    {
        $user_id = Session()->get('user')['id'];
       $orders= DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)
        ->get();
        return view('myorder',['orders'=>$orders]);
    }
    function buynow()
    {
        $user_id = Session()->get('user')['id'];
        $total= DB::table('cart')
         ->join('products','cart.product_id','products.id')
         ->where('cart.user_id',$user_id)
         ->get();
         return view('ordernow',['total'=>$total]);
    }
   
        
}
