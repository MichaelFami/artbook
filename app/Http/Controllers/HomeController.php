<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {

        $this->middleware('auth');
        return view('home');
    }

    public function homepage()
    {
      return view('index');
    }

    public function logout ()
    {
      $this->middleware('auth');
      Auth::logout();
      return redirect('/');
    }
}
