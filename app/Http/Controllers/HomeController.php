<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeAreas;

class HomeController extends Controller
{
    public function index()
    {
        $practiceAreas = PracticeAreas::get();
        return view('welcome', compact('practiceAreas'));

    }
    public function practice()
    {
        $practiceAreas = PracticeAreas::get();
        return view('practice-all', compact('practiceAreas'));
    }

    public function practice_detail($area)
    {
        $practiceAreas = PracticeAreas::get();
        $area = PracticeAreas::where('name',$area)->pluck('name')->first();
        return view('practice-detail', compact('area', 'practiceAreas'));
    }
   
}
