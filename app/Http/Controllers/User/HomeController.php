<?php
# @Date:   2019-12-03T16:15:44+00:00
# @Last modified time: 2019-12-03T16:20:19+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:user');
  }
  public function index(){

    return redirect()->route('home');
  }
}
