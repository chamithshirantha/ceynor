<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
        return view('index');
    }

    public function aboutus(){
        return view('about');
    }

    public function fishingboat(){
        return view('fishingboats');
    }

    public function passengerboat(){
        return view('passengerboats');
    }

    public function otherproduct(){
        return view('otherproducts');
    }

    public function newsfeed(){
        return view('newsfeeds');
    }

    public function tender(){
        return view('tendersvacancies');
    }

    public function contact(){
        return view('contactus');
    }

    public function project(){
        return view('ourprojects');
    }
    
}
