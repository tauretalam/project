<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function Home(){
//         return view('Home');
//     }
// }
class LoginController extends Controller
{
 public function Login()
    {
        return view('Login');
    }

    public function SignUp()
    {
        return view('SignUp');
    }

    public function Cart()
    {
        return view('Cart');
    }

   


}