<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function arrel(){
        return view('main-page');
    }

    public function __invoke()
{
    // tu código aquí
}

}
