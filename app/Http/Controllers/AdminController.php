<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function nuevoUser():View
    {
        
        return view('components.nuevoUser');
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function tablaUser()
    {
        return view('components.tablaUser');
    }
}
