<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Member;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(){
        return view('Theme.home');
    }
    public function about(){
        return view('Theme.About');
    }
    public function services(){
        return view('Theme.services');
    }
    public function contact(){
        return view('Theme.contact');
    }
}
