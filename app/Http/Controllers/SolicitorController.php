<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeAreas;

class SolicitorController extends Controller
{
    public function index()
    {
        $practiceAreas = PracticeAreas::get();
        return view('solicitor.index', compact('practiceAreas'));

    }

    public function find()
    {
        $practiceAreas = PracticeAreas::get();
        return view('solicitor.find', compact('practiceAreas'));

    }
}
