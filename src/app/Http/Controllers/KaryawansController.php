<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawans;

class KaryawansController extends Controller
{
    public function index()
    {
        $karyawans = Karyawans::with('gajis')->get();
        return view('karyawans.index', compact('karyawans'));
    }

    public function show($id)
    {
        $karyawan = Karyawans::with('gajis')->findOrFail($id);
        return view('karyawans.show', compact('karyawan'));
    }
}
