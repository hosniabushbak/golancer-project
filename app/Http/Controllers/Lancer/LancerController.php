<?php

namespace App\Http\Controllers\Lancer;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LancerController extends Controller
{
    public function index()   {



        return view('lancer.index');

    }
}
