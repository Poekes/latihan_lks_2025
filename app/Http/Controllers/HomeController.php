<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $req)
    {
        $galery = Galery::latest("id")->get();
        // dd($galery);
        return view("homePage", ['galery' => $galery]);
    }
}
