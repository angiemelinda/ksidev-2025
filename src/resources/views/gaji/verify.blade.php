@extends('components.layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Verifikasi Akses Gaji</h2>
    <form method="POST" action="{{ route('gaji.detail', $gaji_id) }}">
        @csrf
        <div class="mb-4">
            <label for="key" class="block text-gray-700">Masukkan Key/Password</label>
            <input type="password" name="key" id="key" class="mt-1 block w-full border rounded p-2" required>
            @error('key')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Lihat Detail Gaji</button>
    </form>
</div>
@endsection 