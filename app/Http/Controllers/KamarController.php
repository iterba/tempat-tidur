<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    function index()
    {
        $asoka1 = Kamar::where('nama_kamar', 'ASOKA I')->first();
        $asoka2 = Kamar::where('nama_kamar', 'ASOKA II')->first();
        $asoka3 = Kamar::where('nama_kamar', 'ASOKA III')->first();
        $asokavip = Kamar::where('nama_kamar', 'ASOKA VIP')->first();

        $bangau3 = Kamar::where('nama_kamar', 'BANGAU III')->first();
        $camar3 = Kamar::where('nama_kamar', 'CAMAR III ( Napza )')->first();

        $cempaka1 = Kamar::where('nama_kamar', 'CEMPAKA I')->first();
        $cempaka2 = Kamar::where('nama_kamar', 'CEMPAKA II')->first();
        $cempaka3 = Kamar::where('nama_kamar', 'CEMPAKA III')->first();
        $cempakavip = Kamar::where('nama_kamar', 'CEMPAKA VIP')->first();

        $cendrawasih1 = Kamar::where('nama_kamar', 'CENDRAWASIH I')->first();
        $cendrawasih2 = Kamar::where('nama_kamar', 'CENDRAWASIH II')->first();
        $cendrawasih3 = Kamar::where('nama_kamar', 'CENDRAWASIH III')->first();
        $cendrawasihvip = Kamar::where('nama_kamar', 'CENDRAWASIH VIP')->first();

        $kenanga3 = Kamar::where('nama_kamar', 'KENANGA III ( Isolasi Covid )')->first();
        $merak3 = Kamar::where('nama_kamar', 'MERAK III')->first();
        $merpati3 = Kamar::where('nama_kamar', 'MERPATI III')->first();

        $totalBed = Kamar::sum('jumlah_bed');
        $totalTerpakai = Kamar::sum('digunakan');
        $totalTersedia = $totalBed - $totalTerpakai;

        return view('welcome', compact(
            'asoka1',
            'asoka2',
            'asoka3',
            'asokavip',
            'bangau3',
            'camar3',
            'cempaka1',
            'cempaka2',
            'cempaka3',
            'cempakavip',
            'cendrawasih1',
            'cendrawasih2',
            'cendrawasih3',
            'cendrawasihvip',
            'kenanga3',
            'merak3',
            'merpati3',

            'totalBed',
            'totalTerpakai',
            'totalTersedia'
        ));
    }

    function detail()
    {

        $all = Kamar::orderBy('nama_kamar', 'asc')->get();


        $totalBed = Kamar::sum('jumlah_bed');
        $totalTerpakai = Kamar::sum('digunakan');
        $totalTersedia = $totalBed - $totalTerpakai;


        return view('detail', compact(
            'all',

            'totalBed',
            'totalTerpakai',
            'totalTersedia'
        ));
    }
}
