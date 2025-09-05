<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Dashboard',
        ];
        return view('cv.index', compact('data'));
    }
    
    public function opak()
    {
        $data = [
            'name' => 'Internet',
        ];
        return view('cv.opak', compact('data'));
    }
}
