<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class studentControlle extends Controller
{
    public function index(){

       // Cache::put('email', 'hk147471@gmail.com', $second=10);
      //  Cache::put('state','punjab',now()->addMinute(5));
    //     Cache::remember('state', 5,function(){
    //         return 'punjab';
    //     });
    //    dd(Cache::get('state'));
    //    Cache::put('roll',101);
       // dd(Cache::get('roll'));
       // dd(Cache::get('email'));

       Cache::forever('product','laptop');
      // dd(Cache::get('product'));

       $product=Cache::get('product');
       $quantity=Cache::get('quantity',12);
       $cart=Cache::get('cart',function(){
           return 2;
          
       });
       //clear cache
       Cache::flush();
      
      // dd($product);
        return view('welcome',['product'=>$product,'quantity'=>$quantity,'cart'=>$cart]);
    }
}
