<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        //return dd('hola');
        return view('home.index');
    }

    //public function contact()
    //{
    //    return view('home.contact');
    //}
}
