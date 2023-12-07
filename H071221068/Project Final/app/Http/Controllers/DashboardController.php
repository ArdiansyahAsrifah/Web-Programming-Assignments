<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] = 'Dashboard';
        if(Auth::user()->role == 1)
        {
            return view('admin.dashboard', $data);
        }
        else if(Auth::user()->role == 2)
        {
            return view('teacher.dashboard', $data);
        }
        else if(Auth::user()->role == 3)
        {
            return view('student.dashboard', $data);
        }
    }
}
