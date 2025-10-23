<?php

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\Visi;
use App\Models\Banner;
use App\Models\InovasiLayanan;
use App\Models\Visitor;
use App\Models\Organisasi;
use App\Models\UptExternal;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $ip = request()->ip(); // ambil IP pengunjung

        // Cek apakah IP sudah tercatat hari ini
        $today = Carbon::today();
        $exists = Visitor::where('ip_address', $ip)
                        ->whereDate('visited_at', $today)
                        ->exists();

        if (!$exists) {
            Visitor::create([
                'ip_address' => $ip,
                'visited_at' => now(),
            ]);
        }

        // Hitung jumlah pengunjung
        $mingguIni = Visitor::whereBetween('visited_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $bulanIni  = Visitor::whereMonth('visited_at', Carbon::now()->month)
                            ->whereYear('visited_at', Carbon::now()->year)
                            ->count();
        $tahunIni  = Visitor::whereYear('visited_at', Carbon::now()->year)->count();
        $total     = Visitor::count();

        // get banner;
        $banner = Banner::all();
        $organisasi = Organisasi::first();
        $tugas = Task::first();
        $visi = Visi::first();
        $inovasi_layanan = InovasiLayanan::all();
        $upt_external = UptExternal::all();
        $footer = About::first();
        return view('beranda', compact('mingguIni','bulanIni','tahunIni','total','banner','organisasi','tugas','visi','inovasi_layanan','upt_external','footer'));
    }
}
