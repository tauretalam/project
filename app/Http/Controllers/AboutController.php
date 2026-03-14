<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function Home(){
//         return view('Home');
//     }
// }
class AboutController extends Controller
{
 public function About()
    {
        return view('About');
    }

    public function Contact()
    {
        return view('Contact');
    }

    public function Shop()
    {
        return view('Shop');
    }

   


}