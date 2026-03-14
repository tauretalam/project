<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function Home(){
//         return view('Home');
//     }
// }
class HomeController extends Controller
{
    public function home()
    {
        return view('Home');
    }

    public function ProductDetails()
    {
        return view('ProductDetails');
    }


}