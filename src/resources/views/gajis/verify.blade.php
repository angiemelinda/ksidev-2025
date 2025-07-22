@extends('components.layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Verifikasi Key</h2>
    <form action="{{ route('gajis.showDetail', $gaji_id) }}" method="POST">
        @csrf
        <label for="key" class="block mb-2">Masukkan Key Anda:</label>
        <input type="password" name="key" id="key" class="w-full border rounded px-3 py-2 mb-4" required>
        @error('key')
            <div class="text-red-500 mb-2">{{ $message }}</div>
        @enderror
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Lihat Gaji</button>
    </form>
</div>
@endsection 