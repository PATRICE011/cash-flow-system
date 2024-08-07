<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(){
        $donations = Donate::all();
        return view ('index', ['donations' => $donations]);
        // return view ('index', compact ('donations') );
    }
}
