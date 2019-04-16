<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }
    
    public function services()
    {
        return view('pages/services');
    }
    
    public function about()
    {
        return view('pages/about');
    }
    
    public function testimonials()
    {
        return view('pages/testimonial');
    }
    
    public function contact()
    {
        return view('pages/contact');
    }
}
