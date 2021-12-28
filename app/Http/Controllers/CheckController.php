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
        $request->berat == 1 ? $g1 = true : $g1 = false;
        $request->lembab == 1 ? $g2 = true : $g2 = false;
        $request->karet == 1 ? $g3 = true : $g3 = false;
        $request->udara == 1 ? $g4 = true :$g4 = false;
        $request->tersumbat == 1 ? $g5 = true :$g5 = false;
        $request->tergores == 1 ? $g6 = false :$g6 = true;
        $request->pemasangan == 1 ? $g7 = false :$g7 = true;
        $request->Kehabisan == 1 ? $g8 = true :$g8 = false;
        $request->settingan == 1 ? $g9 = false :$g9 = true;
        $request->habis == 1 ? $g10 = true :$g10 = false;
        $request->membeku == 1 ? $g11 = true :$g11 = false;
        $request->sempurna  == 1 ? $g12 = false :$g12 = true;
        $request->posisi == 1 ? $g13 = false :$g13 = true;
        $request->sesuai == 1 ? $g14 = false :$g14 = true;
        $request->kertas == 1 ? $g15 = false :$g15 = true;
        $request->menekan == 1 ? $g16 = false :$g16 = true;
        $request->nyangkut == 1 ? $g17 = true : $g17 = false;
        $request->pintu == 1 ? $g18 = false : $g18 = true;

        if ($g1 && $g2 && $g3 ) {
            $status = 'PapperJam';
        } else if ($g4 && $g5 && $g6 && $g7 && $g8 && $g9  ) {
            $status = 'Garis';
        } else if ($g10 && $g11  ) {
            $status = 'Putus';
        } else if ($g12 && $g13 && $g14 && $g15 && $g16 && $g17 && $g18) {
            $status = 'Lampu';
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
