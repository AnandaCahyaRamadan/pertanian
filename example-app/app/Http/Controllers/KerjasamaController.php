<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\VisitorHelper;
use App\Models\SaranaPrasarana;
use App\Models\SaranaPrasaranaSlider;

class KerjasamaController extends Controller
{
    public function programDanKerjasama() {

    }

    public function SaranaPrasarana() {
        $sarana_prasarana = SaranaPrasarana::all();
        $sliders = SaranaPrasaranaSlider::all();
        $visitorData = VisitorHelper::getFooterAndVisitor();

        return view('sarana_prasarana', array_merge(
            compact('sarana_prasarana','sliders'),
            $visitorData
        ));
    }
}
