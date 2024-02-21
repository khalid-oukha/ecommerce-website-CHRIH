<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripController extends Controller
{
    public function index(){
        return view("checkout");
    }
}
