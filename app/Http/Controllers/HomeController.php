<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\roles;
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

        // $adm_master = 
        



        
        $t = Auth::user()->with('roles')->get();
        dd($t);
        return view('user.index');
    }
}
