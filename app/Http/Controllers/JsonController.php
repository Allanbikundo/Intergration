<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function json(){
          // Read File

    $jsonString = file_get_contents(public_path('files/map.json'));

    $data = json_decode($jsonString, true);



    // // Update Key

    // $data['country.title'] = "Change Manage Country";



    // // Write File

    // $newJsonString = json_encode($data, JSON_PRETTY_PRINT);

    // file_put_contents(base_path('resources/lang/en.json'), stripslashes($newJsonString));



    // Get Key Value

    // dd(__('title'));
   // dd(__('country.title'));



        return view('pages/json')->with('data',$jsonString);
    }
}
