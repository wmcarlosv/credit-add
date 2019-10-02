<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProviderCredit;
use Auth;

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
        $provider_c = ProviderCredit::where('user_sales_point_id','=',Auth::user()->id)->orderBy('created_at','Desc')->limit('10')->get();
        return view('home',['provider_c' => $provider_c]);
    }
}
