<?php

namespace App\Http\Controllers;

use App\Models\qustion;
use Illuminate\Http\Request;

class qustioncontroler extends Controller
{


public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
  

public function index()
    { $qustion = qustion::all()->random(1);
        return view('layouts.pages.exam',compact('qustion'));
    }


}
