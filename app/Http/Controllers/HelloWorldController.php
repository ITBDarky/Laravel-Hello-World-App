<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class HelloWorldController extends Controller
{
    //
    public function index() {
        return view('app');
    }

    public function about() {
        return view('about');
    }
}
