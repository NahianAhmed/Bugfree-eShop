<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function AboutUs(){
        return view('pages.about_us');
     }

     public function ContactUs(){
        return view('pages.contact_us');
     }
}
