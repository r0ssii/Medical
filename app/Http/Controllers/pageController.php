<?php
# @Date:   2019-12-03T16:47:42+00:00
# @Last modified time: 2019-12-03T17:02:35+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function welcome(){

      return view('welcome');

    }

    public function about(){

      return view('about');

    }
}
