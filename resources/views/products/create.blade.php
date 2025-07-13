@extends('layout')

@section('content')
    <div class="max-w-xl mx-auto py-10 px-6 bg-white rounded-xl shadow mt-10">
        <h2 class="text-2xl font-bold mb-6 text-navy">+ Tambah Produk Baru</h2>

        <form action="{{ auth()->user()->role === 'admin' ? route('admin.products.store') : route('products.store') }}"
            method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1 text-navy">Nama produk</label>
                <input type="text" name="name" class="w-full border border-pale px-4 py-2 rounded-xl" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1 text-navy">Detail Produk</label>
                <textarea name="detail" rows="4" class="w-full border border-pale px-4 py-2 rounded-xl" required></textarea>
            </div>

            <button type="submit" class=" w-full bg-blue-700 text-white font-semibold px-6 py-2 rounded hover:bg-blue-800 transition-all">
                Simpan
            </button>
        </form>
    </div>
@endsection