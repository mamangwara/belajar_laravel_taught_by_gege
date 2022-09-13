<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataWara extends Controller
{
    public function data(){
        $name = "Kobo Kanaeru";
        return view ('index', compact('name'));
    }
}

