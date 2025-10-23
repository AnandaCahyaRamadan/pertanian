<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\SaranaPrasarana;
use App\Models\SkemaSertifikasi;
use App\Models\SaranaPrasaranaSlider; // sesuaikan nama model

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPelatihan = Pelatihan::count();
        $jumlahKeahlian = Keahlian::count();
        $jumlahSkema = SkemaSertifikasi::count();
        $jumlahSarana = SaranaPrasarana::count();

        return view('dashboard.index', compact(
            'jumlahPelatihan', 
            'jumlahKeahlian', 
            'jumlahSkema', 
            'jumlahSarana'
        ));
    }
}
