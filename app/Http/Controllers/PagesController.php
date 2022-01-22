<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      return view('Pages.home');
    }
    public function about(){
      return view('Pages.about');
    }
    public function service(){
      return view('Pages.service');
    }
    public function portfolio(){
      return view('Pages.portfolio');
    }
    public function blog(){
      return view('Pages.blog');
    }
    public function contact(){
      return view('Pages.contact');
    }
    
}
