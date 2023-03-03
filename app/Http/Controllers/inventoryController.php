<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inventoryController extends Controller
{
    public function home()
    {
        return view('welcome'); 
    }

    public function er()
    {
        return view('er');
    }

    public function ct()
    {
        return view('ct');
    }

    public function sc()
    {
        return view('sc');
    }

    public function pyt()
    {
        return view('pyt');
    }
    
    public function sql()
    {
        return view('sql'); 
    }
}
