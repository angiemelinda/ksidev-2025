@extends('components.layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Detail Gaji</h2>
    <ul class="mb-4">
        <li><strong>ID Gaji:</strong> {{ $gaji->id }}</li>
        <li><strong>Nama Karyawan:</strong> {{ $gaji->karyawan->nama }}</li>
        <li><strong>Jumlah:</strong> Rp{{ number_format($gaji->jumlah, 0, ',', '.') }}</li>
        <li><strong>Periode:</strong> {{ $gaji->periode }}</li>
    </ul>
    <a href="/" class="text-blue-600 hover:underline">Kembali ke Beranda</a>
</div>
@endsection 