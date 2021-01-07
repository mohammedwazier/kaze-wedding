<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    // public function satu(){
    //     return view('template.1');
    // }

    // public function dua(){
    //     return view('template.2');
    // }

    public function default(){
        return view('template.default');
    }

    public function default2(){
        return view('template.default2');
    }

    public function default3(){
        return view('template.default3');
    }
}
