<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformeController extends Controller
{
    public function informes(){
        return view('views_stiven.informes');
    }
}