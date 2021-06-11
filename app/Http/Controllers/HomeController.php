<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $travels = Travel::all();
        $data = [
            'travels' => $travels
        ];
        return view('welcome', $data);
    }
   
}
