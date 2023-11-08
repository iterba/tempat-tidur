<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    function index()
    {
        $kamar = Kamar::orderBy('nama_kamar', 'asc')->get();
        $totalBed = Kamar::sum('jumlah_bed');
        $totalTerpakai = Kamar::sum('digunakan');

        return view('welcome', compact('kamar', 'totalBed', 'totalTerpakai'));
    }
}
