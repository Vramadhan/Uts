<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $summary = Summary::all(); // Mengambil data summary dari tabel
        $education = Education::all(); // Mengambil data education dari tabel
        $experience = Experience::all(); // Mengambil data experience dari tabel

        return view('main', compact('summary', 'education', 'experience'));
    }
}
