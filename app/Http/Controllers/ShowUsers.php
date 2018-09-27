<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class ShowUsers extends Controller
{
    // public function ShowUserlist(){


    //     $users = User::all();

    //     return view('profile.dashboard', compact('users'));
    // }


    public function index()
    {
   
        // $users = User::all();
$pagebody='Hahaha';
        // return view('pages.users')->with('users',$users);
             return view('pages.users')->with('body',$pagebody);
    }
}
