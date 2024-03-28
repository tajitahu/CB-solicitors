<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitorController extends Controller
{
    public function index()
    {
        return view('solicitor.index');

    }
}
