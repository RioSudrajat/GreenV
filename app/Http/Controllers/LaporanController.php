<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{

    public function index()
    {
        $laporans = Laporan::with('user')->get();
        return view('laporan.index', compact('laporans'));
    }

    public function create()
    {
        return view('laporan.create');
    }


    public function store(Request $request)
    {
        if (!auth()->user()) {
            return redirect()->route('auth.login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'nohp' => 'required|string|max:20',
            'lokasi' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'bukti' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $imagePath = null;
        if ($request->bukti) {
            $imagePath = time() . '.' . $request->file('bukti')->extension();
            $request->bukti->storeAs('public/images', $imagePath);
        }
        // $request->file('bukti')->store('public/images');

        Laporan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'lokasi' => $request->lokasi,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'bukti' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil disimpan.');
    }
}
