<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Visitor;
use App\Models\Pelatihan;
use App\Models\JadwalAgenda;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\SkemaSertifikasi;

class PenyelenggraPelatihanController extends Controller
{
    public function pelatihan()
    {
        $pelatihans = Pelatihan::with(['pegawai', 'keahlian'])->get();
        $footer = About::first();

        $ip = request()->ip();

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

        $mingguIni = Visitor::whereBetween('visited_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $bulanIni  = Visitor::whereMonth('visited_at', Carbon::now()->month)
                            ->whereYear('visited_at', Carbon::now()->year)
                            ->count();
        $tahunIni  = Visitor::whereYear('visited_at', Carbon::now()->year)->count();
        $total     = Visitor::count();

        $agendas = JadwalAgenda::orderBy('start_date', 'desc')->get();

        return view('pelatihan', compact('pelatihans','agendas','footer','mingguIni','bulanIni','tahunIni','total',));
    }
    

    public function skemaSertifikasi()
    {
        $skemas = SkemaSertifikasi::with('keahlian')->get();
        $footer = About::first();

        $ip = request()->ip();

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

        $mingguIni = Visitor::whereBetween('visited_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $bulanIni  = Visitor::whereMonth('visited_at', Carbon::now()->month)
                            ->whereYear('visited_at', Carbon::now()->year)
                            ->count();
        $tahunIni  = Visitor::whereYear('visited_at', Carbon::now()->year)->count();
        $total     = Visitor::count();

        return view('skema_sertifikasi', compact('skemas','footer','mingguIni','bulanIni','tahunIni','total',));
    }
}
