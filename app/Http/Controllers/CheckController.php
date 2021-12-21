<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->penyakit === 'rabun_jauh') {
            return redirect('cek-rabun-jauh');
        }

        if ($request->penyakit === 'rabun_dekat') {
            return redirect('cek-cartridge');
        }

        if ($request->penyakit === 'rabun_senja') {
            return redirect('cek-belom-tau');
        }
    }

    public function CekRabunJauh(Request $request)
    {
        $request->kepala == 1 ? $g1 = true : $g1 = false;
        $request->lelah == 1 ? $g2 = true : $g2 = false;
        $request->kedip == 1 ? $g3 = true : $g3 = false;
        $request->micing == 1 ? $g4 = true :$g4 = false;
        $request->gosok == 1 ? $g5 = true : $g5 = false;
        $request->kabur == 1 ? $g6 = true : $g6 = false;

        $request->keturunan == 1 ? $p1 = true : $p1 = false;
        $request->matahari == 1 ? $p2 = true : $p2 = false;
        $request->vitamind == 1 ? $p3 = true : $p3 = false;
        $request->membaca == 1 ? $p4 = true : $p4 = false;

        if ($g1 && $g2 && $g3 && $g4 && $g5 && $g6) {
            $status = 'Kena';
        } else if ($g1 && $g2 && $g3 && $g4) {
            $status = 'Kena';
        } else if ($p1 && $p2 && $p3 && $p4) {
            $status = 'Kena';
        } else if ($g1 && $g2 && $g3 && $g4 && $p1 && $p2 && $p3) {
            $status = 'Mungkin';
        } else if ($g5 && $g6 && $p3 && $p4) {
            $status = 'Mungkin';
        } else if ($g2 && $g3 && $p4) {
            $status = 'Mungkin';
        } else if ($g6) {
            $status = 'Mungkin';
        } else {
            $status = 'Tidak';
        }

        return redirect('cek-rabun-jauh')->with('status', $status);
    }

    public function CekRabunDekat(Request $request)
    {
        $request->terdeteksi == 1 ? $g1 = true : $g1 = false;
        $request->warna == 1 ? $g2 = false : $g2 = true;
        $request->garis == 1 ? $g3 = true : $g3 = false;
        $request->penuh == 1 ? $g4 = false :$g4 = true;

        $request->cartridge == 1 ? $p1 = true : $p1 = false;
        $request->konektor == 1 ? $p2 = true : $p2 = false;

        if ($g1 ) {
            $status = 'Kena';
        } else if ($g2  ) {
            $status = 'Mungkin';
        } else if ($g3  ) {
            $status = 'Mungkin';
        } else if ($g1 && $g2 && $g3) {
            $status = 'Kena';
        } else if ($p1 && $p2 ) {
            $status = 'Tidak';
        } else if ($g1 && $g2 && $p1 && $p2) {
            $status = 'Mungkin';
        } else if ($g2 && $g3 && $g4 ) {
            $status = 'Kena';
        } else if ($g4  ) {
            $status = 'Mungkin';
        
        
        } else if ($g2 && $g3 && $g4 ) {
            $status = 'Kena';
        }else if ($g1 && $p2) {
            $status = 'Mungkin';
        } else if ($g1 && $p2) {
            $status = 'Mungkin';
        } else {
            $status = 'Tidak';
        }

        return redirect('cek-cartridge')->with('status', $status);
    }

    public function CekRabunSenja(Request $request)
    {
        $request->sulit == 1 ? $g1 = true : $g1 = false;
        $request->berpindah == 1 ? $g2 = true : $g2 = false;

        $request->vitamina == 1 ? $p1 = true : $p1 = false;
        $request->rabunjauh == 1 ? $p2 = true : $p2 = false;
        $request->katarak == 1 ? $p3 = true : $p3 = false;
        $request->retinitis == 1 ? $p4 = true : $p4 = false;
        $request->glaukoma == 1 ? $p5 = true : $p5 = false;
        $request->keratokonus == 1 ? $p6 = true : $p6 = false;

        if ($g1 || $g2) {
            $status = 'Kena';
        } else if ($g1 && $g2 && $p1 && $p2) {
            $status = 'Kena';
        } else if ($g1 && $g2 && $p3) {
            $status = 'Kena';
        } else if ($g1 && $g2 && $p4) {
            $status = 'Kena';
        } else if ($g1 && $g2 && $p5) {
            $status = 'Kena';
        } else if ($p1 || $p2 || $p3 || $p4 || $p5 || $p6) {
            $status = 'Mungkin';
        } else {
            $status = 'Tidak';
        }

        return redirect('cek-belom-tau')->with('status', $status);
    }
}
