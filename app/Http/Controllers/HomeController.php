<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterusers;


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
        $this->muser = new Masterusers;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = $this->muser->get();
        return view('home', compact('user'));
    }
}
