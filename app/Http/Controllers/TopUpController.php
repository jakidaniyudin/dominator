<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopUpController extends Controller
{
    public function index() {
        return view('topup');
    }

    public  function show() {
        return view('joki');
    }
}
