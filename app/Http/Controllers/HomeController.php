<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'travels' => Travel::all()
        ];
        return view('welcome', $data);
    }
   
}
