<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gajis;
use App\Models\Karyawans;
use Illuminate\Support\Facades\Hash;

class GajisController extends Controller
{
    public function index()
    {
        $gajis = Gajis::with('karyawan')->get();
        return view('gajis.index', compact('gajis'));
    }

    public function create()
    {
        $karyawans = Karyawans::all();
        return view('gajis.create', compact('karyawans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'jumlah' => 'required|numeric',
            'periode' => 'required|string',
        ]);
        Gajis::create($validated);
        return redirect()->route('gajis.index')->with('success', 'Data gaji berhasil ditambahkan!');
    }

    public function show($id)
    {
        $gaji = Gajis::with('karyawan')->findOrFail($id);
        return view('gajis.show', compact('gaji'));
    }

    public function showVerifyForm($id)
    {
        return view('gajis.verify', ['gaji_id' => $id]);
    }

    public function showDetail(Request $request, $id)
    {
        $request->validate([
            'key' => 'required',
        ]);

        $gaji = Gajis::with('karyawan')->findOrFail($id);

        if (!Hash::check($request->input('key'), $gaji->karyawan->key)) {
            return back()->withErrors(['key' => 'Key salah!']);
        }

        return view('gajis.detail', compact('gaji'));
    }

    public function edit($id)
    {
        $gaji = Gajis::findOrFail($id);
        $karyawans = Karyawans::all();
        return view('gajis.edit', compact('gaji', 'karyawans'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'jumlah' => 'required|numeric',
            'periode' => 'required|string',
        ]);
        $gaji = Gajis::findOrFail($id);
        $gaji->update($validated);
        return redirect()->route('gajis.index')->with('success', 'Data gaji berhasil diupdate!');
    }

    public function destroy($id)
    {
        $gaji = Gajis::findOrFail($id);
        $gaji->delete();
        return redirect()->route('gajis.index')->with('success', 'Data gaji berhasil dihapus!');
    }
}
