<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class PagesController extends Controller
{
    public function dashboard(){
        return view('pages/dashboard');
    }

    public function users(){
          $users = User::all();
          $pagebody='Hahaha';
// return view('pages.users')->with('users',$users);
        return view('pages/users')->with('users',$users);
        // return view('pages/users');
    }

    public function tableList(){
        return view('pages/tableList');
    }
}
