<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('create_product');
    }
    public function approve()
    {
        return view('approve_product');
    }
    public function see_approved()
    {
        return view('see_approved_product');
    }
}
