<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeAreas;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');

    }
    public function practice()
    {
        return view('practice-all');
    }

    public function practice_detail($area)
    {
        $area = PracticeAreas::where('name',$area)->pluck('name')->first();
        return view('practice-detail', compact('area'));
    }
   
}
