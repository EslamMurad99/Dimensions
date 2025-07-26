<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //this function to return view "Index"
    public function index()
    {
          $projectCount = \App\Models\Project::count();

          return view('admin.dashboard', compact('projectCount'));
    }
}
