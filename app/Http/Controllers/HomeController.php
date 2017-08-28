<?php

<<<<<<< HEAD
namespace App\Http\Controllers;
=======
namespace codev\Http\Controllers;
>>>>>>> 91faf6e40ed787cab614ef480c43c4b3cea89ee1

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
        return view('home');
    }
}
