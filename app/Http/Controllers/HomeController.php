<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!empty(auth()->user()) && auth()->user()->userAs == 1){
        //     return view ('merchant/merchant_home');
        // }else{
        //     return view('pembeli/pembeli_home');
        // }
    }
}
