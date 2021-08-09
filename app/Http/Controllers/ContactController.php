<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSheet;

class ContactController extends Controller
{
    public function index(Request $request, GoogleSheet $googleSheet)
    {
        $email = array();
        $emailw = $request->input('email');
        $email = [
            [$emailw]
        ];
        $savedData = $googleSheet->saveDataToSheet($email);
        dump($email);
       
        return view('site.form');
    }
}

// $email = array();
        // $email = request()->except('_token');
        // $email = [
        //     [$request->input('email')],
        //  ];
        //  dump($email);
        // $savedData = $googleSheet->saveDataToSheet($email);