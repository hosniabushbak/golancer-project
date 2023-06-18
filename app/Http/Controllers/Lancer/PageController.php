<?php

namespace App\Http\Controllers\Lancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('lancer.about');
    }
}
