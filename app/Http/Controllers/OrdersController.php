<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Orderitem;

use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $user = Auth::user();
        $id=$user->id;
        $menus = Menu::all();
        return view('orders', compact('menus'));
   
    }
    public function store(Request $request)
    {
        // $data = $request->all();
        $user = Auth::user();
        $id=$user->id;

        $user = Auth::user();
        $user = User::find($user->id);
        Order::create([
            'user_id' => $id,
        ]);
   
        $order = Order::where('user_id', Auth::user()->id)->first();
        $menusitems= $request->menus;
        foreach($menusitems as $menu){
            Orderitem::create([
                'menus_id' => $menu,
                'order_id'=> $order->id,
                'price'=>'5'
            ]);
        }

        // return to_route('/')->with('success', 'Order has been sent successfully.');
    }
    
}
