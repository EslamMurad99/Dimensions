<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Models\Service;

class HomeController extends Controller
{
    public function index() {
        $service = Service::all();
        return view('index', compact('service'));
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        return view('contact'); 
    }

    public function projects() {
        return view('projects');
    }
  


}
