<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Reservation;
// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;

// use Symfony\Contracts\Service\Attribute\Required;

// class userController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $user = Auth::user();
//         $id=$user->id;
//         // $table_re = DB::table('reservations')->where('user_id', $id)->get();
//         return view('user', ['user' => $user]);
//     }



//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         $user = Auth::user();
//         $user = User::find($user->id);
//         $request->validate([
//             'name' => ['string', 'max:255'],
//             'email' => ['string', 'email', 'max:255'],
//         ]);
//         User::where('id', $id)->update([
//             'name' => $request->name,
//             'email' => $request->email,

//         ]);
//         return redirect('user')->with('success', $request->name . ' User Data update successfully');
//     }


//            /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         $bookingDestroy = Reservation::find($id);
//         $bookingDestroy->destroy($id);
//         return redirect('user')->with('success', 'Reservation Data deleted successfully');
//     }
// }

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Symfony\Contracts\Service\Attribute\Required;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id=$user->id;
        $table_re = DB::table('reservations')->where('user_id', $id)->get();
        return view('user', ['user' => $user,'table_re'=>$table_re]);
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
        $user = Auth::user();
        $user = User::find($user->id);
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
        ]);
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,

        ]);
        return redirect('user')->with('success', $request->name . ' User Data update successfully');
    }


           /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Reservation::find($id);
        $del->destroy($id);
        return redirect('user')->with('success', 'Reservation Data deleted successfully');
    }
}