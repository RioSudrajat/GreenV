<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    public function showArtikel1()
    {
        return view('artikel.artikel1');
    }

    public function showArtikel2()
    {
        return view('artikel.artikel2');
    }

    public function showArtikel3()
    {
        return view('artikel.artikel3');
    }

    public function showArtikel4()
    {
        return view('artikel.artikel4');
    }

    public function showArtikel5()
    {
        return view('artikel.artikel5');
    }

    public function showArtikel6()
    {
        return view('artikel.artikel6');
    }
}