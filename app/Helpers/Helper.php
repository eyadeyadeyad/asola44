<?php

namespace App\Helpers;

use App\Models\Message;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\Shipping;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function messageList()
    {
        return Message::whereNull('read_at')->orderBy('created_at', 'desc')->get();
    } 
    
    public static function getAllCategory(){
        $category=new Category();
        $menu=$category->getAllParentWithChild();
        return $menu;
    } 
    
    public static function cartCount($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::where('user_id',$user_id)->where('order_id',null)->sum('quantity');
        }
        else{
            $cart = session()->get('cart', []);
            $count = 0;
            foreach($cart as $item) {
                $count += $item['quantity'];
            }
            return $count;
        }
    }

    public static function totalCartPrice($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::where('user_id',$user_id)->where('order_id',null)->sum('amount');
        }
        else{
            $cart = session()->get('cart', []);
            $total = 0;
            foreach($cart as $item) {
                $total += $item['amount'];
            }
            return $total;
        }
    }
    
    public static function shipping(){
        return Shipping::orderBy('id','DESC')->get();
    }
}