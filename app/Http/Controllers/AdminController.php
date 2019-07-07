<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //checking Auth by middelware

    public function __construct() {
        $this->middleware('IsAdmin');
    }

    public function index(){
       return view('admin.index');
    }

}
