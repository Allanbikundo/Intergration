<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        return view('pages/dashboard');
    }

    public function users(){
        return view('pages/users');
    }

    public function tableList(){
        return view('pages/tableList');
    }
}
