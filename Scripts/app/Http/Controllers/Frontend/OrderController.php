<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    // 2- create function index done 
    // 3- create folder names orders in resources/view/frontend
    public function index()
    {
      
        $users = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'users.*')
        ->get();

        return view('admin.orders.index', compact('users'));
    }



    public function show($id)
    {
        
       
        $user = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'users.*')
        ->where('users.id','=', $id)
        ->get();

        // $menus = DB::table('order_items')
        // ->join('menus', 'menus.id', '=', 'order_items.menus_id ')
        // ->select('menus.*', 'order_items.*')
        // ->where('users.id','=', '1')
        // ->get();





//         echo '<pre/>';
// var_dump($user);
    //    dd($user->email);
        return view('admin.orders.view', compact('user'));
        // if ($order) {
        //     return view('admin.orders.view', compact('order','user'));
        // } else {
        //     return redirect()->back()->with('message', 'No Order Found');
        // }
    }
}
