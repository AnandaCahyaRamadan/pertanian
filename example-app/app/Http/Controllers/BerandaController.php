<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Visitor;
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

        return view('beranda', compact('mingguIni','bulanIni','tahunIni','total'));
    }
}
